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


    //To authenticate user Details
    getAuthenticateUserLogin(context, payload) {
        this.form.post('api/login')
            .then((response) => {
                // console.log("OK")
                console.log(response)
                // console.log(response.data)
                if(200 === response.data.status){
                    context.commit('setErrors', {errors:  false});
                    context.commit('setUserProfile', {responseData: response.data.data});
                    context.commit('setLoginStatus', {boolLoggedIn: true})
                    payload.router.push('/');
                    context.commit('showLoading', {boolShowLoading: false});
                }
                else {
                    context.commit('setErrors', {errors:  [response.data.error.message]});
                }
            }, (err) => {
                context.dispatch('showErrors', response);
                // context.commit('setErrors', {errors: [strSystemErrorMessage]});
            });
    }



}


