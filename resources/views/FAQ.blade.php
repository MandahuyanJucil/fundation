<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Chatbot - BYSMP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        #chatbot-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none; /* Initially hidden */
        }
        #chatbot {
            width: 400px;
            height: 500px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }
        #chatbot-header {
            background-color: #ffc107;
            padding: 10px;
            text-align: center;
            color: #fff;
            font-weight: bold;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            cursor: pointer;
        }
        #chatbot-body {
            flex: 1;
            padding: 10px;
            overflow-y: auto;
        }
        .message {
            margin: 10px 0;
        }
        .user-message {
            text-align: right;
            color: #007bff;
        }
        .bot-message {
            text-align: left;
            color: #333;
        }
        #chatbot-input {
            display: flex;
            border-top: 1px solid #ccc;
        }
        #chatbot-input input {
            flex: 1;
            padding: 10px;
            border: none;
            border-bottom-left-radius: 10px;
        }
        #chatbot-input button {
            padding: 10px;
            background-color: #ffc107;
            border: none;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            border-bottom-right-radius: 10px;
        }
        #chatbot-toggle-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px 15px;
            background-color: #ffc107;
            color: #fff;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <!-- Chatbot Toggle Button -->
    <button id="chatbot-toggle-btn" onclick="toggleChatbot()">Chat with us</button>

    <!-- Chatbot Container -->
    <div id="chatbot-container">
        <div id="chatbot">
            <div id="chatbot-header" onclick="toggleChatbot()">BYSMP Chatbot (Click to Close)</div>
            <div id="chatbot-body">
                <div class="message bot-message">
                    Hello! I’m here to answer your questions about BYSMP Bless the Children Foundation. What would you like to know?
                </div>
            </div>
            <div id="chatbot-input">
                <input type="text" id="user-input" placeholder="Type your question...">
                <button onclick="processMessage()">Send</button>
            </div>
        </div>
    </div>

    <script>
        function toggleChatbot() {
            const chatbotContainer = document.getElementById('chatbot-container');
            const toggleBtn = document.getElementById('chatbot-toggle-btn');
            if (chatbotContainer.style.display === 'none' || chatbotContainer.style.display === '') {
                chatbotContainer.style.display = 'block'; // Show the chatbot
                toggleBtn.textContent = 'Close Chat';
            } else {
                chatbotContainer.style.display = 'none'; // Hide the chatbot
                toggleBtn.textContent = 'Chat with us';
            }
        }

        function processMessage() {
            const userInput = document.getElementById('user-input').value.trim();
            const chatbotBody = document.getElementById('chatbot-body');

            if (userInput === '') return;

            // Add user's message
            const userMessage = document.createElement('div');
            userMessage.classList.add('message', 'user-message');
            userMessage.textContent = userInput;
            chatbotBody.appendChild(userMessage);

            // Process the question and respond
            const botMessage = document.createElement('div');
            botMessage.classList.add('message', 'bot-message');

            if (userInput.toLowerCase().includes('contact')) {
                botMessage.textContent = "You can reach us at info@bysmpblessthechildren.com or call +8521 1938 / +63 991 731 1461.";
            } else if (userInput.toLowerCase().includes('location')) {
                botMessage.textContent = "Our main office is at Centro Salvador Bldg., 18 Maginoo St., Tondo, Manila 1013. We also have a branch office at Casa Soledad & Vicente Bldg., 063 Blk 1, Gasangan, Baseco, Port Area, Manila 1018.";
            } else if (userInput.toLowerCase().includes('programs') || userInput.toLowerCase().includes('services')) {
                botMessage.textContent = "We offer community-based programs like child sponsorship and family empowerment, along with auxiliary services like health and wellness, supplemental feeding, and more.";
            } else if (userInput.toLowerCase().includes('facebook')) {
                botMessage.innerHTML = 'Visit our Facebook page: <a href="https://www.facebook.com/BYSMPBlesstheChildren" target="_blank">@BYSMPBlesstheChildren</a>.';
            } else {
                botMessage.textContent = "I'm sorry, I didn't understand that. Please try asking about contact info, location, programs, or services.";
            }

            chatbotBody.appendChild(botMessage);
            chatbotBody.scrollTop = chatbotBody.scrollHeight; // Scroll to the bottom
            document.getElementById('user-input').value = ''; // Clear input
        }
    </script>
</body>
</html>
