import Token from './Token'
import AppStorage from './AppStorage'

class User {
    responseAfterLogin(res){
        const accesstoken = res.data.access_token
        const username = res.data.name
        const userrole = res.data.role
        const url = res.data.url

        if(Token.isValid(accesstoken)){
            AppStorage.store(accesstoken, username, userrole, url)
        }
    }

    hasToken(){
        const storeToken = localStorage.getItem('token')
        if(storeToken){
            return Token.isValid(storeToken) ? true : false
        }
        return false
    }

    loggedIn(){
        return this.hasToken()
    }

    logout(){
        AppStorage.clear()
    }

    user_name(){
        if(this.loggedIn){
            return localStorage.getItem('user')
        }
        return false
    }

    id(){
        if(this.loggedIn){
            const payload = Token.payload(localStorage.getItem('token'))
            return payload.sub
        }
        return false
    }

    role(){
        if(this.loggedIn){
           return localStorage.getItem('role')
        }
        return false
    }

    url(){
        if(this.loggedIn){
            return localStorage.getItem('url')
        }
    }
}

export default User = new User()