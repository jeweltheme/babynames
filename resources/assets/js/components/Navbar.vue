<template>
    <nav class="navbar is-transparent">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                Muslim Baby Names
            </a>
            <div class="navbar-burger burger" data-target="navbar">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbar" class="navbar-menu is-active">
            <router-link class="navbar-item" to="/home">Home</router-link>
            <router-link class="navbar-item" to="/about">About</router-link>
        </div>
    </nav>
</template>