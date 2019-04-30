<div id="facaparteform1" class="col-md-7 smm-textinho m-auto">
        
    <form action="enviarmensagem" method="POST" id="form-app"> {{csrf_field()}}
        <div class="form-group mt-3 pt-3 input-group-lg">
            <label for="smm-nome">NOME*</label>
            <input type="text" placeholder="Ex: Antonio Paulo José" name="nome" id ="smm-nome" class="form-control alert-info" required="true">
        </div>
        <div class="form-group input-group-lg">
            <label for="smm-email">EMAIL*</label>
            <input type="email" placeholder="Ex: antoniopaulojose@assomada.cv" name="email" id="smm-email" class="form-control alert-info" required="true">
        </div>
        <div class="input-group">
            <div class="form-group col-md input-group-lg px-0 mr-1">
                <label for="smm-telefone">TELEFONE*</label>
                <input type="number" placeholder="Ex: +238 9000000" name="assunto" id="smm-telefone" class="form-control alert-info" required="true">
            </div>
            <div class="form-group col-md input-group-lg px-0">    
                <label for="smm-facebook">FACEBOOK</label>
                <input type="text" placeholder="Ex: facebook.com/exemplo" name="assunto" id="smm-facebook" class="form-control alert-info" required="true">                   
            </div>                       
        </div>
        <div class="input-group">
            <div class="form-group col-md input-group-lg px-0 mr-1">    
                <label for="smm-youtube">YOUTUBE</label>
                <input type="text" placeholder="Ex: youtubeyoutube.com/exemplo" name="assunto" id="smm-youtube" class="form-control alert-info" required="true">                   
            </div>
            <div class="form-group col-md input-group-lg px-0">    
                <label for="smm-website">WEBSITE</label>
                <input type="text" placeholder="Ex: teste.com" name="assunto" id="smm-website" class="form-control alert-info" required="true">                   
            </div>
        </div>
        
        <div class="form-group row justify-content-between">
            <span class="mr-3">*campo obrigatório</span>
        </div>
    </form>     
    
    <div class="row justify-content-end">
        <button class="btn smm-btn-enviar mr-2 mt-5" id="voltar">Voltar</button>
        <button class="btn smm-btn-enviar mr-4 mt-5">Enviar</button>
    </div>
                
</div>


