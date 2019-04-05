<template>
    <div class="flex flex-row justify-around ml-32 mr-64">
        <a href="/category"
           class="text-white no-underline font-bold bg-pink h-12 mr-12 rounded shadow w-1/5 uppercase flex flex-row items-center justify-center">
            <span>Back to Categories</span>
        </a>
        <div class="flex flex-row justify-center w-full">
            <div class="border px-8 py-4 rounded shadow w-full">
                <div class="text-3xl">
                    {{ category.name }}
                </div>

                <div class="flex flex-row justify-end">
                    <button @click="destroy"
                            class="mr-4 no-underline bg-red p-3 rounded shadow uppercase flex flex-row items-center justify-center text-white font-bold focus:outline-none">
                        <span>Delete</span>
                    </button>
                    <a :href="`/category/${category.id}/edit`"
                       class="mr-4 no-underline bg-white p-3 rounded shadow uppercase flex flex-row items-center justify-center text-pink font-bold">
                        <span>Edit</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        props: ['category'],

        methods : {
            destroy() {
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
                        window.axios.delete('/category/' + this.category.id).then(() => {
                            this.$swal.fire(
                                'Deleted!',
                                'Your category has been deleted.',
                                'success'
                            ).then(() => {
                                window.location = "/category";
                            });
                        });
                    }
                });
            }
        }
    }
</script>
