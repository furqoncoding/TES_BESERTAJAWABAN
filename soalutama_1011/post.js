const express = require('express')
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express()
const port = 9000

let values = [{
    "user_id": "ifabula",
    "scope": "user"
}];



app.use(cors());

app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

app.post('/value', (req, res) => {
    
    const value = req.body;

    values.filter(i => {
        if (i.user_id === value.user_id && i.scope === value.scope) {
            res.status(200).send(
                {
                    responseCode: 200,
                    responseMessage: "Sukses"      
                }
            );
        }
        else
        {
            res.status(404).send(
                {
                    responseCode: 404,
                    responseMessage: "Unauthorized"      
                }
            );
        }

        
    });

});


app.listen(port, () => console.log(`Hello world app listening on port ${port}!`));