import React from 'react';
import ReactDOM from 'react-dom/client';

function Login() {
    return (
        // 
        
    );
}

export default Login;

if (document.getElementById('login')) {
    const Index = ReactDOM.createRoot(document.getElementById("login"));

    Index.render(
        <React.StrictMode>
            <Login/>
        </React.StrictMode>
    )
}
