<template>
    <div class="flex flex-row justify-around ml-32 mr-64">
        <a href="/video"
           class="text-white no-underline font-bold bg-pink h-12 mr-12 rounded shadow w-1/5 uppercase flex flex-row items-center justify-center">
            <span>Back to Videos</span>
        </a>
        <div class="flex flex-row justify-center w-full">
            <div class="border px-8 py-4 rounded shadow w-full">
                <div class="text-3xl text-xl">
                    {{ video.name }}
                </div>
                <div>
                    <span>{{ video.description }}</span>
                </div>
                <div class="my-8 flex flex-row justify-center">
                    <video width="768" height="432" class="outline-none" controls>
                        <source :src="`/playvideo/${video.id}`" type="video/mp4">
                    </video>
                </div>

                <div class="flex flex-row justify-end">
                    <a href="/video"
                       class="mr-4 no-underline bg-pink p-3 rounded shadow uppercase flex flex-row items-center justify-center text-white font-bold">
                        <span>Back to Videos</span>
                    </a>
                    <a :href="`/video/${video.id}/edit`"
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
        props: ['video'],
    }
</script>
