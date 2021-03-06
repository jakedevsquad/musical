<template>
    <div class="flex flex-row justify-around ml-32 mr-64">
        <a href="/video"
           class="text-white no-underline font-bold bg-pink h-12 mr-12 rounded shadow w-1/5 uppercase flex flex-row items-center justify-center">
            <span>Back to Videos</span>
        </a>
        <form @submit.prevent="updated" @keydown="form.errors.clear($event.target.name)"
              class="flex flex-row justify-center w-full">
            <div class="border px-8 py-4 rounded shadow w-full">
                <div class="text-xl mb-8">
                    {{ this.form.name ? this.form.name : "New Video" }}
                </div>
                <div class="my-4">
                    <label for="name" :class="{'text-red': form.errors.has('name')}">Name</label>
                    <input v-model="form.name" id="name" name="name" maxlength="64"
                           class="leading-loose tracking-wide shadow-sm appearance-none border rounded py-1 px-3 text-grey-darker w-full focus:outline-none"
                           :class="{'border-red': form.errors.has('name')}">
                    <div class="text-red" v-if="form.errors.has('name')">{{ form.errors.get('name') }}</div>
                </div>
                <div class="my-4">
                    <label for="description">Description</label>
                    <textarea rows="6" v-model="form.description" id="description" name="description"
                              maxlength="1023"
                              class="leading-loose tracking-wide shadow-sm appearance-none border rounded py-2 px-3 text-grey-darker w-full focus:outline-none resize-none"></textarea>
                </div>
                <div class="flex flex-row justify-center">
                    <div class="mr-8">
                        <div class="mt-8 flex flex-row justify-center">
                            <label class="w-64 flex flex-col items-center px-4 py-6 rounded-lg shadow tracking-wide uppercase border cursor-pointer"
                                   :class="{
                                              'border-green bg-green text-white hover:bg-green-dark' : videoUploaded && !form.errors.has('video'),
                                              'border-pink text-pink hover:bg-pink hover:text-white' : !videoUploaded && !form.errors.has('video'),
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
                        <div class="text-red text-center mt-2" v-if="form.errors.has('video')">{{
                            form.errors.get('video') }}
                        </div>
                    </div>
                    <div>
                        <div class="mt-8 flex flex-row justify-center">
                            <label class="w-64 flex flex-col items-center px-4 py-6 rounded-lg shadow tracking-wide uppercase border cursor-pointer"
                                   :class="{
                                              'border-green bg-green text-white hover:bg-green-dark' : imageUploaded && !form.errors.has('image'),
                                              'border-pink text-pink hover:bg-pink hover:text-white' : !imageUploaded && !form.errors.has('image'),
                                              'border-red text-red hover:bg-red hover:text-white' : form.errors.has('image')
                                              }">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"/>
                                </svg>
                                <span class="mt-2 text-base leading-normal">{{ imageUploaded ? "Image Selected" : "Select an Image" }}</span>
                                <input name="image" @change="imageChangeEvent" ref="image" type="file" class="hidden"
                                       accept="image/png,image/jpeg"/>
                            </label>
                        </div>
                        <div class="text-red text-center mt-2" v-if="form.errors.has('image')">{{
                            form.errors.get('image') }}
                        </div>
                    </div>
                </div>


                <div class="flex flex-row justify-end">
                    <a :href="`/video/${video.id}`"
                       class="mr-4 no-underline bg-white p-3 rounded shadow uppercase flex flex-row items-center justify-center text-pink font-bold">
                        <span>Cancel</span>
                    </a>
                    <button class="p-3 rounded shadow uppercase flex flex-row items-center justify-center focus:outline-none"
                            :class="{'bg-pink-lighter cursor-not-allowed' : form.errors.any(), 'bg-pink' : !form.errors.any()}"
                            :disabled="form.errors.any()">
                        <span class="text-white font-bold">Save</span>
                    </button>
                </div>
            </div>
        </form>

    </div>
</template>

<script>

    import CustomFormData from "../../utils/customFormData";

    export default {

        props: ['video'],

        data() {
            return {
                videoUploaded: true,
                imageUploaded: true,
                form         : new CustomFormData({
                    name       : this.video.name,
                    description: this.video.description,
                    video      : this.video.url,
                    image      : this.video.photo_url,
                }),
            }
        },

        methods: {
            updated() {
                this.addVideoAndImageToForm();
                this.form.post('/video/' + this.video.id).then(() => {
                    this.$swal.fire(
                        'Updated!',
                        'Your video has been updated.',
                        'success'
                    ).then(() => {
                        window.location = "/video";
                    });
                });
            },

            addVideoAndImageToForm() {
                if (this.$refs.video.files.length > 0) {
                    this.form.video = this.$refs.video.files[0];
                }
                if (this.$refs.image.files.length > 0) {
                    this.form.image = this.$refs.image.files[0];
                }
            },

            videoChangeEvent() {
                if (!this.$refs.video.value) {
                    return;
                }
                this.form.errors.clear('video');
                this.videoUploaded = true;
            },

            imageChangeEvent() {
                if (!this.$refs.image.value) {
                    return;
                }
                this.form.errors.clear('image');
                this.imageUploaded = true;
            }
        }
    }
</script>
