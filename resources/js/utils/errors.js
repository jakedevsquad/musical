export default class Errors {

    constructor() {
        this.errors  = {};
    }

    has(field) {
        return this.errors.hasOwnProperty(field);
    }

    any() {
        return Object.keys(this.errors).length > 0;
    }

    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0];
        }
    }

    record(response) {
        if (response.status === 422) {
            this.errors = response.data.errors;
        }
    }

    clear(field) {
        if (field) {
            delete this.errors[field]
            return;
        }
        this.errors = {};
    }
}