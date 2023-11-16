document.addEventListener("DOMContentLoaded", function () {
    // Verifica se a mensagem já foi exibida usando local storage
    if (!localStorage.getItem('mensagemExibida')) {
      exibirMensagem();
  
      // Marca a mensagem como exibida no local storage
      localStorage.setItem('mensagemExibida', 'true');
    }
  });
  
  function exibirMensagem() {
    // Cria a caixa de mensagem
    var messagebox = document.createElement('div');
    messagebox.classList.add('message-box');
    messagebox.innerHTML = '<form>   <div class="profileForm">   <h1 class="gradient-text">BEM-VINDO</h1>   <div class="linhaForm1"></div>   <div class="linhaForm2"></div>   <p><span>Novo por aqui?</span><br>Deseja fazer seu primeiro cadastro!?</p>   <button class="btn">Cadastrar-me!</button>   <br><br>   <button class="btn" onclick="fecharMensagem()">Não Quero Agora</button>   <div class="botnProfi">   <label class="lblProfile">Lembre-me mais tarde</label>   <input type="checkbox" id="bellCheckbox">   <label for="bellCheckbox" class="bellLabel">   </label>   </div>   </div>   </form>';
  
    // Adiciona a caixa de mensagem ao corpo do documento
    document.body.appendChild(messagebox);
  }

  
  // Função para fechar a mensagem
  function fecharMensagem() {
    var messagebox = document.querySelector('.message-box');
    // Remove a caixa de mensagem
    messagebox.parentNode.removeChild(messagebox);
  }
  



// document.addEventListener("DOMContentLoaded", function () {
//     // Cria a caixa de mensagem
//     var messagebox = document.createElement('div');
//     messagebox.classList.add('message-box');
//     messagebox.innerHTML = '<p>Bem-vindo à nossa página!</p><button onclick="fecharMensagem()">Fechar</button>';
  
//     // Adiciona a caixa de mensagem ao corpo do documento
//     document.body.appendChild(messagebox);
//   });
  
//   // Função para fechar a mensagem
//   function fecharMensagem() {
//     var messagebox = document.querySelector('.message-box');
//     // Remove a caixa de mensagem
//     messagebox.parentNode.removeChild(messagebox);
//   }
  