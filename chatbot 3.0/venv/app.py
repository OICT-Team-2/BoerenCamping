from flask import Flask, render_template, request, jsonify

from chat import get_response

app = Flask(__name__, template_folder='templates')

@app.route("/chatbot", methods=["POST"])
def chatbot_endpoint():
    data = request.get_json()

    @app.get("/")
    def index_get():
        print (render_template('base.html'))
        return render_template("base.html")

    @app.post("/predict")
    def predict():
        text = request.get_json().get("message")
        # TODO: check if text is valid
        response = get_response(text)
        message = {"answer": response}
        return jsonify(message)

    response = {"result": "Chatbot antwoord"}
    return jsonify(response)

if __name__ == "__main__":
    app.run(debug=True)