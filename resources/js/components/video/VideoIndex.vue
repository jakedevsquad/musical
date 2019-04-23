<template>
    <div>
        <div class="w-2/3 mx-auto">
            <div class="flex justify-end">
                <div class="mr-6">
                    <input ref="filter" type="search" class="bg-white shadow-sm rounded p-3 focus:outline-none"
                           placeholder="Search by name..." @input="filter" v-model="filterText">
                </div>
                <button class="bg-blue hover:bg-blue-dark text-white shadow-sm font-bold py-2 px-4 rounded focus:outline-none"
                        @click="createVideo">
                    Add Video
                </button>
            </div>
            <div class="bg-white shadow-md rounded my-6">
                <table class="text-left w-full border-collapse">
                    <thead>
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Name
                        </th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Url
                        </th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Description
                        </th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="hover:bg-grey-lighter" v-for="video in videos.data">
                        <td class="py-4 px-6 border-b border-grey-light">{{ video.name }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ video.url }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ video.description }}</td>
                        <td class="py-4 px-6 border-b border-grey-light w-32">
                            <a :href="`/video/${video.id}`">
                                <span class="material-icons text-blue hover:text-blue-dark cursor-pointer hover:bg-grey-light rounded">slideshow</span>
                            </a>
                            <a :href="`/video/${video.id}/edit`">
                                <span class="material-icons text-green hover:text-green-dark cursor-pointer hover:bg-grey-light rounded">edit</span>
                            </a>
                            <button @click="destroy(video)" class="focus:outline-none">
                                <span class="material-icons text-red hover:text-red-dark cursor-pointer hover:bg-grey-light rounded focus:outline-none">delete</span>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex justify-center">
                <ul class="flex list-reset border border-grey-light rounded w-auto font-sans">
                    <li v-if="videos.current_page > 1">
                        <a class="no-underline block hover:text-white hover:bg-blue text-blue border-r border-grey-light px-3 py-2"
                           :href="`/video?page=${videos.current_page - 1}&filter=${filterText}`">Previous</a>
                    </li>
                    <li v-for="(index) in videos.last_page">
                        <a :class="{
                        'bg-blue text-white' : videos.current_page === index,
                        'bg-white text-blue' : videos.current_page !== index,
                        'border-r' : index !== videos.last_page
                        }"
                           class="no-underline block hover:text-white hover:bg-blue border-grey-light px-3 py-2"
                           :href="`/video?page=${index}&filter=${filterText}`">{{ index }}</a>
                    </li>
                    <li v-if="videos.last_page > videos.current_page">
                        <a class="no-underline block hover:text-white hover:bg-blue text-blue px-3 py-2 border-l border-grey-light"
                           :href="`/video?page=${videos.current_page + 1}&filter=${filterText}`">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        props: ['videos', 'defaultFilter'],

        data() {
            return {
                filterText: this.defaultFilter,
            }
        },

        mounted() {
            this.$refs.filter.focus()
        },

        methods: {
            filter: _.debounce(function () {
                window.location = "/video?page=1&filter=" + this.filterText;
            }, 700),

            createVideo() {
                window.location = "/video/create";
            },

            destroy(video) {
                this.$swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        window.axios.delete('/video/' + video.id).then(() => {
                            this.$swal.fire(
                                'Deleted!',
                                'Your video has been deleted.',
                                'success'
                            ).then(() => {
                                window.location = "/video";
                            });
                        }).catch((error) => {
                            this.$swal.fire(
                                'We could not delete your video!',
                                error.response.data,
                            );
                        });
                    }
                });
            },
        }
    }
</script>
