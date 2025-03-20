// resources/js/components/UserProfile.js
import React from 'react';
import ReactDOM from 'react-dom/client';
import Form from './Form'

function Profile() {
    return (
        <div className="user-profile">
            <h1></h1>
        </div>
    );
}

export default Profile;
if (document.getElementById('profile')) {
    const Index = ReactDOM.createRoot(document.getElementById("profile"));

    Index.render(
        <React.StrictMode>
            <Profile/>
        </React.StrictMode>
    );
}
if (document.getElementById('form-container')) {
    const FormIndex = ReactDOM.createRoot(document.getElementById('form-container'));
    FormIndex.render(
        <React.StrictMode>
            <Form />
        </React.StrictMode>
    );
}
