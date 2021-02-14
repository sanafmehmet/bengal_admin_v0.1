class Token {
    isValid(token){
        const payload = this.payload(token)
        if(payload) {
            //return payload.iss == "http://hrms.digitalexpressionsltd.com/api/auth/login" || "http://hrms.digitalexpressionsltd.com/api/auth/register" ? true : false
            return payload.iss == "http://127.0.0.1:8001/api/auth/login" || "http://127.0.0.1:8001/api/auth/register" ? true : false
        }
        false
    }

    payload(token){
        const payload = token.split('.')[1]
        return this.decode(payload)
    }

    decode(payload){
        return JSON.parse(atob(payload))
    }
}

export default Token = new Token()