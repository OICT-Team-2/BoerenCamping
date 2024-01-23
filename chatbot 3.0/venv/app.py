from flask import Flask, render_template, request, jsonify
from chat import get_response

app = Flask(__name__, template_folder='templates')

@app.route("/chatbot", methods=["POST"])
def chatbot_endpoint():
    data = request.get_json()
    message = data.get("message")

    if message:
        response = get_response(message)
        result = {"result": response}
    else:
        result = {"error": "No message provided"}

    return jsonify(result)

@app.route("/")
def index():
    return render_template("base.html")

if __name__ == "__main__":
    app.run(debug=True)
