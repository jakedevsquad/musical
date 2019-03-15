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
                                <label for="name">Name</label>
                                <input v-model="name" id="name" class="shadow-sm appearance-none border rounded py-2 px-3 text-grey-darker w-full focus:outline-none">
                            </div>
                            <div class="my-2">
                                <label for="description">Description</label>
                                <input v-model="description" id="description" class="shadow-sm appearance-none border rounded py-2 px-3 text-grey-darker w-full focus:outline-none">
                            </div>
                            <div class="mt-12 mb-4 flex flex-row justify-center">
                                <label class="w-64 flex flex-col items-center px-4 py-6 text-blue rounded-lg shadow tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                    </svg>
                                    <span class="mt-2 text-base leading-normal">Select an MP4</span>
                                    <input @change="processFile($event)" type='file' class="hidden" accept="video/mp4"/>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-link tw-text-grey-dark
                                hover:tw-text-grey-darkest hover:tw-no-underline"
                                type="button" data-dismiss="modal" :disabled="false">
                            Cancel
                        </button>

                        <button class="btn btn-primary" :disabled="false">
                            <span v-if="false"><i class="fa fa-spin fa-spinner"></i> Saving...</span>
                            <span v-else>Save</span>
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
                name: null,
                description: null,
                file: null
            }
        },

        computed: {
            url_store() {
                return route('task.store');
            },
            url_update() {
                return route('task.update', {task: this.form.id});
            },
            teams() {
                return this.$root.teams;
            },
            teamMembers() {
                let team = this.teams.find(i => i.id === this.form.team_id);
                if (team) return [{id: null, name: ''}].concat(team.users);
                return [];
            },
            types() {
                return this.$root.types;
            },
            points() {
                return [0, 0.5, 1, 2, 3, 5, 8, 13, 21, 34];
            }
        },

        methods: {
            setupVideo(video = {}) {
                this.id = video.id;
                this.name = video.name;
                this.description = video.description;
                this.file = video.file;
            },

            saved() {
                this.$emit('saved');
                this.close();
            },

            open(video = {}) {
                this.setupVideo(video);
                $(this.$el).modal('show');
            },

            close() {
                $(this.$el).modal('hide');
            },

            processFile(event) {
                this.file = event.target.files[0];
                debugger;
            }
        }
    }
</script>
