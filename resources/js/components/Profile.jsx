// resources/js/components/UserProfile.js
import React from 'react';
import ReactDOM from 'react-dom/client';




function MyForm() {
    // Estados para los campos del formulario
    const [input1, setInput1] = useState('');
    const [input2, setInput2] = useState('');
    const [input3, setInput3] = useState('');
    const [input4, setInput4] = useState('');
    const [input5, setInput5] = useState('');
    const [input6, setInput6] = useState('');

    const handleSubmit1 = (event) => {
        event.preventDefault();
        alert(`Formulario 1 enviado:
            Campo 1: ${input1}
            Campo 2: ${input2}
            Campo 3: ${input3}
        `);
    };

    const handleSubmit2 = (event) => {
        event.preventDefault();
        alert(`Formulario 2 enviado:
            Campo 4: ${input4}
            Campo 5: ${input5}
            Campo 6: ${input6}
        `);
    };

    return (
        <div>
            {/* Primer Formulario */}
            <Form onSubmit={handleSubmit1}>
                <h2>Formulario 1</h2>
                <div className="form-group">
                    <Form.Control
                        type="text"
                        value={input1}
                        onChange={(e) => setInput1(e.target.value)}
                        placeholder="Campo 1"
                    />
                </div>
                <div className="form-group">
                    <Form.Control
                        type="text"
                        value={input2}
                        onChange={(e) => setInput2(e.target.value)}
                        placeholder="Campo 2"
                    />
                </div>
                <div className="form-group">
                    <Form.Control
                        type="text"
                        value={input3}
                        onChange={(e) => setInput3(e.target.value)}
                        placeholder="Campo 3"
                    />
                </div>

                <Button variant="primary" type="submit">
                    Enviar Formulario 1
                </Button>
            </Form>

            {/* Espacio entre formularios */}
            <hr />

            {/* Segundo Formulario */}
            <Form onSubmit={handleSubmit2}>
                <h2>Formulario 2</h2>
                <div className="form-group">
                    <Form.Control
                        type="text"
                        value={input4}
                        onChange={(e) => setInput4(e.target.value)}
                        placeholder="Campo 4"
                    />
                </div>
                <div className="form-group">
                    <Form.Control
                        type="text"
                        value={input5}
                        onChange={(e) => setInput5(e.target.value)}
                        placeholder="Campo 5"
                    />
                </div>
                <div className="form-group">
                    <Form.Control
                        type="text"
                        value={input6}
                        onChange={(e) => setInput6(e.target.value)}
                        placeholder="Campo 6"
                    />
                </div>

                <Button variant="primary" type="submit">
                    Enviar Formulario 2
                </Button>
            </Form>
        </div>
    );
}

export default MyForm;

if (document.getElementById('profile')) {
    const Index = ReactDOM.createRoot(document.getElementById('profile'));
    Index.render(
        <React.StrictMode>
            <Profile />
        </React.StrictMode>
    );
}
