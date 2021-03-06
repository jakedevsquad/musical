import Errors from "./errors";

export default class Form {

    constructor(data) {

        this.originalData = data;

        for (let field in data) {
            this[field] = data[field];
        }

        this.errors = new Errors();
    }

    data() {
        let data = new FormData();
        for (let property in this.originalData) {
            data.append(property, this[property]);
        }
        return data;
    }

    reset() {
        for (let field in this.originalData) {
            this[field] = '';
        }
        this.errors.clear();
    }

    post(url) {
        return this.submit('post', url);
    }

    submit(requestType, url) {
        return new Promise((resolve, reject) => {
            window.axios[requestType](url, this.data())
                .then(response => {
                    this.onSuccess(response.data);

                    resolve(response.data);
                })
                .catch(error => {
                    this.onFail(error.response);

                    reject(error.response.data);
                });
        });
    }

    onSuccess() {
        this.reset();
    }

    onFail(response) {
        this.errors.record(response);
    }
}