<template>
    <!-- MODAL -->
    <div class="modal fade" :id="id">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="embed-responsive embed-responsive-16by9">
                    <slot></slot>
                </div>
                <div class="py-3 text-center">
                    <button class="btn btn-danger shadow-lg" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['id']
    }
</script>