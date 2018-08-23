<template>
        <panel-item :field="field">
        </panel-item>
</template>

<script>

export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
