import axios from 'axios'
export default {
    getProductList({commit}) {
        axios.get('api/admin/products')
            .then(response => {
                if(response.status == 200){
                    commit('setProductList', response.data)
                }
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


