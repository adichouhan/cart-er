export default {
    setProductList(state, payload){
        state.arrProductList = payload;
    },

    setAuthentication(state, payload){
        state.arrProductList = payload;
    },

    // To set My Profile
    setUserProfile(state, payload) {
        state.userProfileDetails    = payload.responseData.profile_data;
        state.userSessionKey        = payload.responseData.user_session_key;
        state.first_name            = payload.responseData.profile_data.first_name;
        state.user_id               = payload.responseData.profile_data.id;

        // To store user session key in browser session
        sessionStorage.setItem("user_session_key", state.userSessionKey);
        sessionStorage.setItem("first_name", state.first_name);
        sessionStorage.setItem("user_id", state.user_id);
    },
}


