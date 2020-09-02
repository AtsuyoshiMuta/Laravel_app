<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                Hello World!
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:'HelloWorldComponent',
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
