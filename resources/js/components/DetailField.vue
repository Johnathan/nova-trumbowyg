<template>
        <panel-item :field="field">
                <template slot="value">
                        <div class="trumbowyg-details" v-html="field.value"></div> {{field}}
                </template>
        </panel-item>
</template>

<script>

export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
