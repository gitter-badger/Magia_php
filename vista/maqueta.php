<?php 
$nombre_campo = "Su e-mail"; 
$valor_del_campo = "robincoello@hotmail.com"; 
$placeholder = "Escriba aca la clave";
?>
<form>
    <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#texto" aria-controls="texto" role="tab" data-toggle="tab">texto</a></li>    
    <li role="presentation"><a href="#texto_inactivo" aria-controls="texto_inactivo" role="tab" data-toggle="tab">texto_inactivo</a></li>
    <li role="presentation"><a href="#readonly" aria-controls="readonly" role="tab" data-toggle="tab">readonly</a></li>
    
    <li role="presentation"><a href="#clave" aria-controls="clave" role="tab" data-toggle="tab">clave</a></li>
    <li role="presentation"><a href="#textarea" aria-controls="textarea" role="tab" data-toggle="tab">textarea</a></li>
    <li role="presentation"><a href="#checkbox" aria-controls="checkbox" role="tab" data-toggle="tab">checkbox</a></li>
    <li role="presentation"><a href="#radio" aria-controls="radio" role="tab" data-toggle="tab">radio</a></li>
    <li role="presentation"><a href="#select" aria-controls="select" role="tab" data-toggle="tab">select</a></li>
    <li role="presentation"><a href="#select_multiple" aria-controls="select_multiple" role="tab" data-toggle="tab">select_multiple</a></li>
    <li role="presentation"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">info</a></li>
    
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="texto"><?php echo tipo_de_campo('texto',$nombre_campo,$valor_del_campo,$placeholder); ?></div>
    <div role="tabpanel" class="tab-pane" id="texto_inactivo"><?php echo tipo_de_campo('texto_inactivo',$nombre_campo,$valor_del_campo,$placeholder); ?></div>    
    <div role="tabpanel" class="tab-pane" id="readonly"><?php echo tipo_de_campo('readonly',$nombre_campo,$valor_del_campo,$placeholder); ?></div>    
    <div role="tabpanel" class="tab-pane" id="clave"><?php echo tipo_de_campo('clave',$nombre_campo,$valor_del_campo,$placeholder); ?></div>
    <div role="tabpanel" class="tab-pane" id="textarea"><?php echo tipo_de_campo('textarea',$nombre_campo,$valor_del_campo,$placeholder); ?></div>    
    <div role="tabpanel" class="tab-pane" id="checkbox"><?php echo tipo_de_campo('checkbox',$nombre_campo,$valor_del_campo,$placeholder); ?></div>
    <div role="tabpanel" class="tab-pane" id="radio"><?php echo tipo_de_campo('radio',$nombre_campo,$valor_del_campo,$placeholder); ?></div>
    <div role="tabpanel" class="tab-pane" id="select"><?php echo tipo_de_campo('select',$nombre_campo,$valor_del_campo,$placeholder); ?></div>
    <div role="tabpanel" class="tab-pane" id="select_multiple"><?php echo tipo_de_campo('select_multiple',$nombre_campo,$valor_del_campo,$placeholder); ?></div>
    <div role="tabpanel" class="tab-pane" id="info"><?php echo tipo_de_campo('info',$nombre_campo,$valor_del_campo,$placeholder); ?></div>
  </div>
</div>    
</form>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<?php 
function tipo_de_campo($tipo,$nombre_campo,$valor_del_campo,$placeholder){
    switch ($tipo) {
        
        case 'texto':
            $campo = '
            <div class="form-group">
                    <label for="'.$nombre_campo.'" class="col-sm-2 control-label">'.$nombre_campo.'</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="'.$nombre_campo.'" placeholder="'.$placeholder.'" value="'.$valor_del_campo.'">
                    </div>
                  </div><br><br>'; 
            
            
            
            return $campo;
            
            
             
            
            return $campo;
            break;
        
        
        case 'texto_inactivo':
            $campo = '<div class="form-group">
                    <label for="'.$nombre_campo.'" class="col-sm-2 control-label">'.$nombre_campo.'</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="'.$nombre_campo.'" placeholder="'.$placeholder.'" value="'.$valor_del_campo.'" disabled >
                    </div>
                  </div>'; 
            
            return $campo;
            break;     
        
        
        case 'readonly':
            $campo = '<div class="form-group">
                    <label for="'.$nombre_campo.'" class="col-sm-2 control-label">'.$nombre_campo.'</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="'.$nombre_campo.'" placeholder="'.$placeholder.'" value="'.$valor_del_campo.'" readonly >
                    </div>
                  </div>'; 
            
            return $campo;
            break;        
        
        case 'clave':
            $campo = '<div class="form-group">
                    <label for="'.$nombre_campo.'" class="col-sm-2 control-label">'.$nombre_campo.'</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="'.$nombre_campo.'" placeholder="'.$placeholder.'" value="'.$valor_del_campo.'">
                    </div>
                  </div>'; 
            return $campo;
         
            break;
         
        case 'textarea':
            $campo = '<div class="form-group">
                    <label for="'.$nombre_campo.'" class="col-sm-2 control-label">'.$nombre_campo.'</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" rows="3" placeholder="'.$placeholder.'">'.$valor_del_campo.'</textarea>
                    </div>
                  </div>';     
            
            
            return $campo;
            break;
        
        case 'checkbox':
            $campo = '<div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> '.$nombre_campo.'
                        </label>
                      </div>
                    </div>
                  </div>';                             
            return $campo;
            break;
        
        
        case 'radio':
            $campo = '<div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="radio">
                        <label>
                          <input type="radio"> '.$nombre_campo.'
                        </label>
                      </div>
                    </div>
                  </div>';                             
            return $campo;
            break;
        
        
        case 'select':
            $campo = '<div class="form-group">
                    <label for="'.$nombre_campo.'" class="col-sm-2 control-label">'.$nombre_campo.'</label>
                    <div class="col-sm-10">
                      <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                    </div>
                  </div>';
            
            return $campo;
            break;
        
        
            case 'select_multiple':
            $campo = '<div class="form-group">
                    <label for="'.$nombre_campo.'" class="col-sm-2 control-label">'.$nombre_campo.'</label>
                    <div class="col-sm-10">
                      <select multiple class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                    </div>
                  </div>';
            
            return $campo;
            break;
        
            case 'info':
            $campo = '<div class="form-group">
                    <label class="col-sm-2 control-label">'.$nombre_campo.'</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">'.$valor_del_campo.'</p>
                    </div>
                  </div>';
            
            return $campo;
            break;
        
        

        default:
            break;
    }
}
?>














Estos son los < h1 2 3 4 5 6 etc 
<h1>h1. Bootstrap heading</h1>
<h2>h2. Bootstrap heading</h2>
<h3>h3. Bootstrap heading</h3>
<h4>h4. Bootstrap heading</h4>
<h5>h5. Bootstrap heading</h5>
<h6>h6. Bootstrap heading</h6>

<hr>
Con textos secudarios 
<h1>h1. Bootstrap heading <small>Secondary text</small></h1>
<h2>h2. Bootstrap heading <small>Secondary text</small></h2>
<h3>h3. Bootstrap heading <small>Secondary text</small></h3>
<h4>h4. Bootstrap heading <small>Secondary text</small></h4>
<h5>h5. Bootstrap heading <small>Secondary text</small></h5>
<h6>h6. Bootstrap heading <small>Secondary text</small></h6>

<hr>
<pre>Esto es un parrafo normal <p>...</p></pre>
<p>
    Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>

<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>

<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>

<hr>
<pre>Esto es un parrafo con class="lead"</pre>

<p class="lead">Esto es un parrafo con clase lead
Esto es un parrafo con clase lead
Esto es un parrafo con clase lead
Esto es un parrafo con clase lead
Esto es un parrafo con clase lead
Esto es un parrafo con clase lead
Esto es un parrafo con clase lead
Esto es un parrafo con clase lead
Esto es un parrafo con clase lead
</p>


<pre>parrafafo con texto borrado</pre>

<del>This line of text is meant to be treated as deleted text.</del>
<br><br><br><br>

<pre></pre>
<s>This line of text is meant to be treated as no longer accurate.</s>
<br><br><br><br>


<pre>Insert text</pre>
<ins>This line of text is meant to be treated as an addition to the document.</ins>
<br><br>
<br><br>

<pre>Texto subrayado</pre>
<u>This line of text will render as underlined</u>
<br><br><br><br>

<pre>Small text</pre>
<small>This line of text is meant to be treated as fine print.</small>
<br><br><br><br>

<pre>Texto strong</pre>
<strong>Esto es un texto puesto como strongtext</strong>
<br><br>
<br><br>


<pre>Texto inclinado</pre>
<em>rendered as italicized text</em><br><br><br><br>



<pre></pre>



For example, <code>&lt;section&gt;</code> should be wrapped as inline.




<pre></pre>

<var>y</var> = <var>m</var><var>x</var> + <var>b</var>


<pre></pre>

<samp>This text is meant to be treated as sample output from a computer program.</samp>






















<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>