<template>
<!--  <PanelItem :index="index" :field="field" />-->
    <div class="flex">
        <div class="md:w-1/4 md:py-3"> {{field.name}} </div>
        <star-rating
            :rating="field.value"
            :read-only="true"
            :increment="this.field.step"
            :star-size="this.field.sizeStars || 20"
            :animate="this.field.animate"
            :max-rating="this.field.maxRating"
            :show-rating="this.field.showNumber"
        />
    </div>
</template>

<script>
import  StarRating  from 'vue-star-rating';
export default {
    components: {
        StarRating
    },

     props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
}


</script>
