import axios from 'axios'
export default {
    getProductList({commit}) {
        axios.get('/admin/product_list')
            .then(response => {
                commit('setProductList',response.data)
            }).catch(error => {
            console.log(error)
        })
    },
    addNewProduct({commit}, payload) {
        axios.post('/add/product', payload)
            .then(response => {

            }).catch(error => {
            console.log(error)
        })

    },
}


