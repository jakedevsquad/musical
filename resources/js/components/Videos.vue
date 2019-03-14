<template>
    <div>
        <div class="w-2/3 mx-auto">
            <div class="text-right">
                <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
                    Add Video
                </button>
            </div>
            <div class="bg-white shadow-md rounded my-6">
                <table class="text-left w-full border-collapse">
                    <thead>
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Filename</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Description</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="hover:bg-grey-lighter" v-for="video in videos.data">
                        <td class="py-4 px-6 border-b border-grey-light">{{ video.name }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ video.filename }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ video.description }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a href="#" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark">Edit</a>
                            <a href="#" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark">View</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex justify-center">
                <ul class="flex list-reset border border-grey-light rounded w-auto font-sans">
                    <li v-if="videos.current_page > 1">
                        <a class="block hover:text-white hover:bg-blue text-blue border-r border-grey-light px-3 py-2" :href="`/videos?page=${videos.current_page - 1}`">Previous</a>
                    </li>
                    <li v-for="(index) in videos.last_page">
                        <a :class="{'bg-blue text-white' : videos.current_page === index, 'border-r' : index !== videos.last_page}"
                           class="block hover:text-white hover:bg-blue text-blue border-grey-light px-3 py-2" :href="`/videos?page=${index}`">{{ index }}</a>
                    </li>
                    <li v-if="videos.last_page > videos.current_page">
                        <a class="block hover:text-white hover:bg-blue text-blue px-3 py-2 border-l border-grey-light" :href="`/videos?page=${videos.current_page + 1}`">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['videos'],

        computed: {
            numPages() {

            }
        }
    }
</script>
