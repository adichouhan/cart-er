<template lang="html">

  <section class="login">
    <div class="wrapper d-flex align-items-center auth login-full-bg">
      <div class="row w-100">
        <div class="col-lg-6 mx-auto">
          <div class="auth-form-dark text-left p-5">
            <h2>Login</h2>
            <h4 class="font-weight-light">Hello! let's get started</h4>
            <form class="pt-5">
              <form @submit.prevent="login" @keydown="form.onKeydown($event)">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input v-model="form.email" :class="{ 'is-invalid': form.errors.has('email') }" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                  <i class="mdi mdi-account"></i>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input v-model="form.password" :class="{ 'is-invalid': form.errors.has('password') }" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  <i class="mdi mdi-eye"></i>
                </div>
                <div class="mt-5">
                  <button :disabled="form.busy" type="submit" class="btn btn-block btn-warning btn-lg font-weight-medium">Log In</button>
                </div>
                <div class="mt-3 text-center">
                  <a href="#" class="auth-link text-white">Forgot password?</a>
                </div>
              </form>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</template>

<script lang="js">
  import Form from 'vform'
export default {
  name: 'login',
  data () {
    return {
      // Create a new form instance
      form: new Form({
        email: '',
        password: '',
        remember: false
      })
    }
  },

  methods: {
    login () {
      console.log('sdfsd')
      // Submit the form via a POST request
      this.form.post('api/login')
              .then((response) => {
                if(response.data.status == 200){
                  this.$cookies.set("bearer_token", response.data.access_token)
                  this.store.commit('')
                }
              })
    }
  }

}
</script>

<style scoped lang="scss">
.login {

}
</style>
