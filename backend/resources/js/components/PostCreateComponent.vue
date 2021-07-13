<template>
    <v-main>
        <v-container>
            <v-textarea
                filled
                auto-grow
                label="content"
                row-height="30"
                shaped
            ></v-textarea>
            <editor
                api-key="7i07x8u13pdqcup32m1fpcx6ufcif0eeicksrxmmlqarxmrd"
                initial-value="Once upon a time..."
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
                content: process.env.MIX_TINYMCE_API_KEY
            }
        },
        mounted() {
            axios.get('https://jsonplaceholder.typicode.com/users')
                .then(response => console.log(response))
                .catch(error => console.log(error))
        }
    }
</script>