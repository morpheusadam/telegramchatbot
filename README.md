# Telegram Chatbot

This is a simple Telegram chatbot built using Python and the python-telegram-bot library. The bot can respond to basic commands and messages.

## Features

- Responds to basic commands like `/start` and `/help`
- Echoes user messages
- Can be extended with more functionalities

## Prerequisites

- Python 3.6 or higher
- A Telegram bot token (You can get one by talking to [BotFather](https://core.telegram.org/bots#botfather))

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/yourusername/telegram-chatbot.git
    cd telegram-chatbot
    ```

2. Create a virtual environment and activate it:
    ```bash
    python3 -m venv venv
    source venv/bin/activate  # On Windows use `venv\Scripts\activate`
    ```

3. Install the required packages:
    ```bash
    pip install -r requirements.txt
    ```

4. Create a `.env` file in the root directory and add your Telegram bot token:
    ```env
    TELEGRAM_TOKEN=your-telegram-bot-token
    ```

## Usage

1. Run the bot:
    ```bash
    python bot.py
    ```

2. Open Telegram and start a chat with your bot.

## Project Structure
