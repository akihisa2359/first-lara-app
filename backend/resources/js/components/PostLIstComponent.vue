<template>
    <v-main>
        <v-container>
            <!-- <v-row dense>
                <v-col cols="6">
                    <v-card>
                        <v-img
                            src='https://cdn.vuetifyjs.com/images/cards/house.jpg'
                            class="white--text align-end"
                            height="200px"
                        >
                            <v-card-title>titleaaa</v-card-title>
                        </v-img>
                        <v-card-text>
                            <div>sampletext sampletext sampletext sampletext sampletext</div>
                        </v-card-text>
                    </v-card>
                </v-col>
                <v-col cols="6">
                    <v-card>
                        <v-img
                            src='https://cdn.vuetifyjs.com/images/cards/road.jpg'
                            class="white--text align-end"
                            height="200px"
                        >
                            <v-card-title>titleaaa</v-card-title>
                        </v-img>
                        <v-card-text>
                            <div>sampletext sampletext sampletext sampletext sampletext</div>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row> -->
            <v-row class="mt-3" justify="center">
                <v-col class="mt-8" cols="10" md="4" sm="5" v-for="(post, i) in posts" :key="i">
                    <v-card
                        :hover="true">
                    <v-img
                            :src='"/storage/image/" + post.id + "/" + post.file_name'
                            class="white--text align-end"
                            :aspect-ratio="16/8"
                            width="100％"
                            height="auto"
                        >
                            <v-card-title>{{post.title}}</v-card-title>
                        </v-img>
                        
                        <v-card-text style="height:80px">
                            <p class="post-content">{{post.content}}</p>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>

        </v-container>
    </v-main>
</template>

<script>
    export default {
        data() {
            return {
                posts: []
            }
        },
        methods: {
            removeHtmlTag(content) {
                return content.replace(/(<([^>]+)>)/gi, '');
            },

            getPosts() {
                axios.get('/posts')
                    .then((res) => {
                        let posts = res.data;
                        for (let i = 0; i < posts.length; i++) {
                            posts[i].content = this.removeHtmlTag(posts[i].content);
                        }

                        console.log(res.data);
                        this.posts = posts;
                    });
            }
        },
        mounted() {
            this.getPosts();
        }
        
    }
</script>

<style scoped>
    .post-content {
        display: -webkit-box;
        overflow: hidden;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
    }
</style>