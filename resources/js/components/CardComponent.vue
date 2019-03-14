<template>
    <div class="card">
        <div :class="{ 'card-header':true, 'bg-dark text-white': darkHead }">
            <span class="h3">{{ title }}</span>
        </div>
        <div class="card-body">
           <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            title: String,
            darkHead: Boolean,
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
