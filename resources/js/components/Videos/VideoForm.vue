<template>
    <div class="modal zoomin">
        <form @submit.prevent="saved">
            <div class="modal-dialog md:tw-max-w-3xl modal-dialog sm:tw-max-w-full sm:tw-px-6">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                            {{ this.name ? this.name : "New Video" }}
                        </div>

                        <div class="cursor-pointer" @click="close">
                            <span class="material-icons hover:text-red">close</span>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div>
                            <div class="my-2">
                                <label for="name" :class="{'text-red': form && form.errors.has(name)}">Name</label>
                                <input v-model="name" id="name"
                                       class="shadow-sm appearance-none border rounded py-2 px-3 text-grey-darker w-full focus:outline-none"
                                       :class="{'border-red': form && form.errors.has(name)}">
                            </div>
                            <div class="my-2">
                                <label for="description">Description</label>
                                <input v-model="description" id="description"
                                       class="shadow-sm appearance-none border rounded py-2 px-3 text-grey-darker w-full focus:outline-none">
                            </div>
                            <div class="mt-12 flex flex-row justify-center">
                                <label class="w-64 flex flex-col items-center px-4 py-6 text-blue rounded-lg shadow tracking-wide uppercase border border-blue cursor-pointer"
                                       :class="{'bg-green text-white hover:bg-green-dark' : videoUploaded, 'hover:bg-blue hover:text-white' : !videoUploaded}">
                                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"/>
                                    </svg>
                                    <span class="mt-2 text-base leading-normal">{{ videoUploaded ? "MP4 Selected" : "Select an MP4" }}</span>
                                    <input @change="videoChangeEvent" ref="video" type="file" class="hidden"
                                           accept="video/mp4"/>
                                </label>
                            </div>
                            <div class="text-center text-lg">
                                {{ filename }}
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-link tw-text-grey-dark
                                hover:tw-text-grey-darkest hover:tw-no-underline"
                                type="button" data-dismiss="modal">
                            Cancel
                        </button>

                        <button class="btn btn-primary">
                            <span>Create</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>

    export default {

        data() {
            return {
                name         : null,
                description  : null,
                filename     : '',
                videoUploaded: false,
                form         : null,
            }
        },

        methods: {
            setupVideo(video = {}) {
                this.name        = video.name;
                this.description = video.description;
            },

            saved() {
                this.form = this.setupForm();
                window.axios.post('/videos', this.form).then(() => {
                    this.$emit('saved');
                    this.close();
                })
            },

            open(video = {}) {
                this.setupVideo(video);
                $(this.$el).modal('show');
            },

            close() {
                this.$refs.video.value = null;
                this.videoUploaded     = false;
                this.filename          = '';
                $(this.$el).modal('hide');
            },

            setupForm() {
                const form = new FormData();
                form.append('name', this.name);
                form.append('description', this.description);
                form.append('video', this.$refs.video.files[0]);

                return form;
            },

            videoChangeEvent() {
                if (!this.$refs.video.value) {
                    return;
                }
                this.videoUploaded = true;
                this.filename      = this.$refs.video.files[0].name;
            }
        }
    }
</script>
