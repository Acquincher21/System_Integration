const chatBox = document.getElementById('chatBox');
  const chatInput = document.getElementById('chatInput');
  const sendBtn = document.getElementById('sendBtn');

  function addMessage(message, sender = 'user') {
    const msgElem = document.createElement('p');
    msgElem.textContent = message;
    msgElem.style.padding = '5px 10px';
    msgElem.style.borderRadius = '8px';
    msgElem.style.margin = '8px 0';
    if (sender === 'user') {
      msgElem.style.backgroundColor = '#4676d7';
      msgElem.style.color = 'white';
      msgElem.style.alignSelf = 'flex-end';
      msgElem.style.maxWidth = '70%';
    } else {
      msgElem.style.backgroundColor = '#e1e9ff';
      msgElem.style.color = '#333';
      msgElem.style.alignSelf = 'flex-start';
      msgElem.style.maxWidth = '70%';
    }
    chatBox.appendChild(msgElem);
    chatBox.scrollTop = chatBox.scrollHeight;
  }

  sendBtn.addEventListener('click', () => {
    const message = chatInput.value.trim();
    if (message) {
      addMessage(message, 'user');
      chatInput.value = '';

      // Simulate simple bot response
      setTimeout(() => {
        addMessage("Thanks for your message! We'll get back to you shortly.", 'bot');
      }, 1000);
    }
  });

  chatInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
      sendBtn.click();
    }
  });