import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-rating-field', IndexField)
  app.component('detail-rating-field', DetailField)
  app.component('form-rating-field', FormField)
})
