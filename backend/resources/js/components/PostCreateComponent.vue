<template>
    <v-main>
        <v-container>
            <v-form>
                 <v-file-input
                    label="File Shown In Post List"
                    @change="fileSelected"
                ></v-file-input>
                <v-text-field
                    v-model="title"
                    label="Title"
                    required
                ></v-text-field>
                <editor
                    api-key="7i07x8u13pdqcup32m1fpcx6ufcif0eeicksrxmmlqarxmrd"
                    :init="{
                        height: 500,
                        menubar: false,
                        table_toolbar: [
                            'tableprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol'
                        ],
                        plugins: [
                            'print preview fullpage importcss searchreplace autolink \
                            autosave save directionality visualblocks visualchars fullscreen image link media template codesample \
                            table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount \
                            imagetools textpattern noneditable help charmap quickbars  emoticons'
                        ],
                        toolbar:[
                            'undo redo | formatselect | bold italic backcolor | \
                            alignleft aligncenter alignright alignjustify | \
                            bullist numlist outdent indent | removeformat | help table'
                        ],
                    
                    }"
                    v-model="content"
                />
                <v-btn class="mt-4" @click="submit">submit</v-btn>
            </v-form>

        </v-container>
    </v-main>
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form>
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Title</label>
                        <input type="text" class="col-sm-9 form-control" id="title">
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-sm-3 col-form-label">Content</label>
                        <input type="text" class="col-sm-9 form-control" id="content">
                    </div>
                    <div class="form-group row">
                        <label for="person-in-charge" class="col-sm-3 col-form-label">Person In Charge</label>
                        <input type="text" class="col-sm-9 form-control" id="person-in-charge">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div> -->
</template>

<script>

    import Editor from '@tinymce/tinymce-vue'

    export default {
        components: {
            'editor': Editor
        },
        data() {
            axios.get('https://jsonplaceholder.typicode.com/users')
                .then(response => console.log(response))
                .catch(error => console.log(error))


            return {
                file: '',
                title: '',
                content: '',
            }
        },
        mounted() {
            axios.get('/api/test')
                .then(response => console.log(response))
                .catch(error => console.log(error))
        },
        methods: {
            fileSelected(file) {
                this.file = file;
                console.log(this.file);
            },
            submit() {
                // const axiosPost = axios.create({
                //     xsrfHeaderName: 'X-CSRF-Token',
                //     withCredentials: true
                // })
                // axiosPost.post('/api/post', {
                //     csrfToken: 'q7oTOxSlZbhOSHMl6PH9YkkrH5iudOJEs515klkh',
                //     title: 'title',
                //     content: 'content',
                // })
                // .then((res) => {
                //     console.log(res);
                // })
                var formdata = new FormData();
                formdata.append('file', this.file);
                formdata.append('title', this.title);
                formdata.append('content',this.content);
                axios.post('/post', formdata)
                    .then((res) => {
                        console.log(res);
                    });
            }
        }
    }
</script>