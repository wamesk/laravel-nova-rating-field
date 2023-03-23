<template>
<!--  <span>{{ fieldValue }}</span>-->
    <star-rating
        class="rating"
        :rating="fieldValue"
        :read-only="true"
        :increment="this.field.step"
        :star-size="this.field.sizeStars || 20"
        :animate="this.field.animate"
        :max-rating="this.field.maxRating"
        :show-rating="false"
    />
</template>

<style scoped>
    .vue-star-rating {
        /*height:20px;*/
    }
</style>

<script>
import StarRating from "vue-star-rating";

export default {
    components: {
        StarRating
    },

  props: ['resourceName', 'field'],

  computed: {
    fieldValue() {
      return this.field.value
    },
  },

    mounted() {
        this.value = this.field.value || 0
    },

    methods: {
        /**
         * Fill the given FormData object with the field's internal value.
         */
        // fill(formData) {
        //     formData.append(this.field.attribute, this.value || 0)
        // },

    }
}
</script>
