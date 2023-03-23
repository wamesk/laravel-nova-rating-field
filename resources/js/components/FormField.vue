<template>
  <DefaultField
    :field="field"
    :errors="errors"
    :show-help-text="showHelpText"
    :full-width-content="fullWidthContent"
  >
    <template #field>

        <star-rating
            class="rating"
            @update:rating="setRating($event)"
            :id="field.attribute"
            :rating="value"
            :value = rating
            :increment="this.field.step"
            :star-size="this.field.sizeStars || 20"
            :animate="this.field.animate"
            :max-rating="this.field.maxRating"
            :show-rating="this.field.showNumber"
        />

    </template>
  </DefaultField>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'
import  StarRating  from 'vue-star-rating';


export default {
    components: {
        StarRating,
    },

  mixins: [FormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field'],

    methods: {
        setRating($event) {
            this.rating = Number($event);
            this.value = this.rating;
        },
    },
    data() {
        return {
            rating: null,
            currentRating: "No Rating",
            mouseOverRating: null
        };
    },

    mounted() {
        this.rating = this.field.value || 0
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
        formData.append(this.field.attribute, this.rating || '')
    },
}
</script>
