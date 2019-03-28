<template>
    <div class="modal zoomin">
        <form @submit.prevent="saved" @keydown="form.errors.clear($event.target.name)">
            <div class="modal-dialog md:tw-max-w-3xl modal-dialog sm:tw-max-w-full sm:tw-px-6">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                            {{ this.form.name ? this.form.name : "New Video" }}
                        </div>

                        <div class="cursor-pointer" @click="close">
                            <span class="material-icons hover:text-red">close</span>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="my-2">
                            <label for="name" :class="{'text-red': form.errors.has('name')}">Name</label>
                            <input v-model="form.name" id="name" name="name"
                                   class="shadow-sm appearance-none border rounded py-2 px-3 text-grey-darker w-full focus:outline-none"
                                   :class="{'border-red': form.errors.has('name')}">
                            <div class="text-red" v-if="form.errors.has('name')">{{ form.errors.get('name') }}</div>
                        </div>
                        <div class="my-2">
                            <label for="description">Description</label>
                            <input v-model="form.description" id="description" name="description"
                                   class="shadow-sm appearance-none border rounded py-2 px-3 text-grey-darker w-full focus:outline-none">
                        </div>
                        <div>
                            <div class="mt-12 flex flex-row justify-center">
                                <label class="w-64 flex flex-col items-center px-4 py-6 rounded-lg shadow tracking-wide uppercase border cursor-pointer"
                                     :class="{
                                              'border-green bg-green text-white hover:bg-green-dark' : videoUploaded && !form.errors.has('video'),
                                              'border-blue text-blue hover:bg-blue hover:text-white' : !videoUploaded && !form.errors.has('video'),
                                              'border-red text-red hover:bg-red hover:text-white' : form.errors.has('video')
                                              }">
                                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"/>
                                    </svg>
                                    <span class="mt-2 text-base leading-normal">{{ videoUploaded ? "MP4 Selected" : "Select an MP4" }}</span>
                                    <input name="video" @change="videoChangeEvent" ref="video" type="file" class="hidden"
                                           accept="video/mp4"/>
                                </label>
                            </div>
                            <div class="text-red text-center mt-2" v-if="form.errors.has('video')">{{ form.errors.get('video') }}</div>
                        </div>
                        <div class="text-center text-lg">
                            {{ filename }}
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button @click="close" class="btn btn-link tw-text-grey-dark
                                hover:tw-text-grey-darkest hover:tw-no-underline"
                                type="button" data-dismiss="modal">
                            Cancel
                        </button>

                        <button class="btn btn-primary" :disabled="form.errors.any()">
                            <span>Create</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>

    import CustomFormData from "../../utils/customFormData";

    export default {

        data() {
            return {
                filename     : '',
                videoUploaded: false,
                form         : new CustomFormData({
                    name: '',
                    description: '',
                    video: '',
                }),
            }
        },

        methods: {
            saved() {
                this.addVideoToForm();
                this.form.submit('post', '/videos').then(() => {
                    this.$emit('saved');
                    this.close();
                });
            },

            open() {
                $(this.$el).modal('show');
            },

            close() {
                this.$refs.video.value = null;
                this.videoUploaded     = false;
                this.filename          = '';
                this.form.reset();
                $(this.$el).modal('hide');
            },

            addVideoToForm() {
                if (this.$refs.video.files.length > 0) {
                    this.form.video = this.$refs.video.files[0];
                }
            },

            videoChangeEvent() {
                if (!this.$refs.video.value) {
                    return;
                }
                this.form.errors.clear('video');
                this.videoUploaded = true;
                this.filename      = this.$refs.video.files[0].name;
            }
        }
    }
</script>
