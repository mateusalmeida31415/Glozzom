<template>
    <footer :id="id" class="py-3 text-center bg-black">
        <span>Copyright &copy; {{'' | getYear}} Glozzom</span>
    </footer>   
</template>

<script>
    export default {
        // id: ID da section
        props: ['id']
    }
</script>