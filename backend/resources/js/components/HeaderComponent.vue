<!--
<template>
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark">
                <span class="navbar-brand mb-0 h1">Vue Laravel SPA</span>
                <div>
                    <router-link v-bind:to="{name: 'post.list'}">
                        <button class="btn btn-success">List</button>
                    </router-link>
                    <router-link v-bind:to="{name: 'post.create'}">
                        <button class="btn btn-success">ADD</button>
                    </router-link>
                </div>
            </nav>
        </div>
    </div>
</template>
-->
<template>
		<v-app-bar
			color="gray accent-4"
			app
			dark
			prominent
			src="https://picsum.photos/1920/1080?random"
		>
			<v-container class="d-flex align-center">		
				<v-toolbar-title>びゅうてぃふぁいい</v-toolbar-title>
				<div class="flex-grow-1"></div>
			
				<v-tab>login</v-tab>
				<v-tab>register</v-tab>

			</v-container>
		</v-app-bar>
</template>
<script>
	export default {}
</script>