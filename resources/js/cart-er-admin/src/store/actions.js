import axios from 'axios'
export default {
    getProductList({commit}) {
        axios.get('/product_list')
            .then(response => {
                commit('setProductList',response.data)
            }).catch(error => {
            console.log(error)
        })
    },
}


