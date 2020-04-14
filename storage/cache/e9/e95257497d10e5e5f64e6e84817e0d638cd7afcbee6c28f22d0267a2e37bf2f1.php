<?php

/* catalog/option_form.twig */
class __TwigTemplate_5738a8bd2553aace11eec8172f25c302a9d7f6dba88176033868d75f60d96194 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-option\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 23
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-option\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 28
        echo (isset($context["text_option"]) ? $context["text_option"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\">";
        // line 30
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <div class=\"col-sm-10\">";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 32
            echo "                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
                  <input type=\"text\" name=\"option_description[";
            // line 33
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["option_description"]) ? $context["option_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["option_description"]) ? $context["option_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" class=\"form-control\" />
                </div>";
            // line 35
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 36
                echo "                <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-type\">";
        // line 41
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"type\" id=\"input-type\" class=\"form-control\">
                  <optgroup label=\"";
        // line 44
        echo (isset($context["text_choose"]) ? $context["text_choose"] : null);
        echo "\">";
        // line 45
        if (((isset($context["type"]) ? $context["type"] : null) == "select")) {
            // line 46
            echo "                
                
                  <option value=\"select\" selected=\"selected\">";
            // line 48
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>";
        } else {
            // line 52
            echo "                
                
                  <option value=\"select\">";
            // line 54
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>";
        }
        // line 58
        if (((isset($context["type"]) ? $context["type"] : null) == "radio")) {
            // line 59
            echo "                
                
                  <option value=\"radio\" selected=\"selected\">";
            // line 61
            echo (isset($context["text_radio"]) ? $context["text_radio"] : null);
            echo "</option>";
        } else {
            // line 65
            echo "                
                
                  <option value=\"radio\">";
            // line 67
            echo (isset($context["text_radio"]) ? $context["text_radio"] : null);
            echo "</option>";
        }
        // line 71
        if (((isset($context["type"]) ? $context["type"] : null) == "checkbox")) {
            // line 72
            echo "                
                
                  <option value=\"checkbox\" selected=\"selected\">";
            // line 74
            echo (isset($context["text_checkbox"]) ? $context["text_checkbox"] : null);
            echo "</option>";
        } else {
            // line 78
            echo "                
                
                  <option value=\"checkbox\">";
            // line 80
            echo (isset($context["text_checkbox"]) ? $context["text_checkbox"] : null);
            echo "</option>";
        }
        // line 84
        echo "                </optgroup>
                  <optgroup label=\"";
        // line 85
        echo (isset($context["text_input"]) ? $context["text_input"] : null);
        echo "\">";
        // line 86
        if (((isset($context["type"]) ? $context["type"] : null) == "text")) {
            // line 87
            echo "                
                
                  <option value=\"text\" selected=\"selected\">";
            // line 89
            echo (isset($context["text_text"]) ? $context["text_text"] : null);
            echo "</option>";
        } else {
            // line 93
            echo "                
                
                  <option value=\"text\">";
            // line 95
            echo (isset($context["text_text"]) ? $context["text_text"] : null);
            echo "</option>";
        }
        // line 99
        if (((isset($context["type"]) ? $context["type"] : null) == "textarea")) {
            // line 100
            echo "                
                
                  <option value=\"textarea\" selected=\"selected\">";
            // line 102
            echo (isset($context["text_textarea"]) ? $context["text_textarea"] : null);
            echo "</option>";
        } else {
            // line 106
            echo "                
                
                  <option value=\"textarea\">";
            // line 108
            echo (isset($context["text_textarea"]) ? $context["text_textarea"] : null);
            echo "</option>";
        }
        // line 112
        echo "                </optgroup>
                  <optgroup label=\"";
        // line 113
        echo (isset($context["text_file"]) ? $context["text_file"] : null);
        echo "\">";
        // line 114
        if (((isset($context["type"]) ? $context["type"] : null) == "file")) {
            // line 115
            echo "                
                
                  <option value=\"file\" selected=\"selected\">";
            // line 117
            echo (isset($context["text_file"]) ? $context["text_file"] : null);
            echo "</option>";
        } else {
            // line 121
            echo "                
                
                  <option value=\"file\">";
            // line 123
            echo (isset($context["text_file"]) ? $context["text_file"] : null);
            echo "</option>";
        }
        // line 127
        echo "                </optgroup>
                  <optgroup label=\"";
        // line 128
        echo (isset($context["text_date"]) ? $context["text_date"] : null);
        echo "\">";
        // line 129
        if (((isset($context["type"]) ? $context["type"] : null) == "date")) {
            // line 130
            echo "                
                
                  <option value=\"date\" selected=\"selected\">";
            // line 132
            echo (isset($context["text_date"]) ? $context["text_date"] : null);
            echo "</option>";
        } else {
            // line 136
            echo "                
                
                  <option value=\"date\">";
            // line 138
            echo (isset($context["text_date"]) ? $context["text_date"] : null);
            echo "</option>";
        }
        // line 142
        if (((isset($context["type"]) ? $context["type"] : null) == "time")) {
            // line 143
            echo "                
                
                  <option value=\"time\" selected=\"selected\">";
            // line 145
            echo (isset($context["text_time"]) ? $context["text_time"] : null);
            echo "</option>";
        } else {
            // line 149
            echo "                
                
                  <option value=\"time\">";
            // line 151
            echo (isset($context["text_time"]) ? $context["text_time"] : null);
            echo "</option>";
        }
        // line 155
        if (((isset($context["type"]) ? $context["type"] : null) == "datetime")) {
            // line 156
            echo "                
                
                  <option value=\"datetime\" selected=\"selected\">";
            // line 158
            echo (isset($context["text_datetime"]) ? $context["text_datetime"] : null);
            echo "</option>";
        } else {
            // line 162
            echo "                
                
                  <option value=\"datetime\">";
            // line 164
            echo (isset($context["text_datetime"]) ? $context["text_datetime"] : null);
            echo "</option>";
        }
        // line 168
        echo "                </optgroup>
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 173
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 175
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 180
        echo (isset($context["text_value"]) ? $context["text_value"] : null);
        echo "</legend>
            <table id=\"option-value\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left required\">";
        // line 184
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 185
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 186
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>";
        // line 192
        $context["option_value_row"] = 0;
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["option_values"]) ? $context["option_values"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
            // line 194
            echo "              <tr id=\"option-value-row";
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "\">
                <td class=\"text-center\"><input type=\"hidden\" name=\"option_value[";
            // line 195
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "][option_value_id]\" value=\"";
            echo $this->getAttribute($context["option_value"], "option_value_id", array());
            echo "\" />";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 197
                echo "                  <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                    <input type=\"text\" name=\"option_value[";
                // line 198
                echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                echo "][option_value_description][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][name]\" value=\"";
                echo (($this->getAttribute($this->getAttribute($context["option_value"], "option_value_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["option_value"], "option_value_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" class=\"form-control\" />
                  </div>";
                // line 200
                if ($this->getAttribute($this->getAttribute((isset($context["error_option_value"]) ? $context["error_option_value"] : null), (isset($context["option_value_row"]) ? $context["option_value_row"] : null), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 201
                    echo "                  <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_option_value"]) ? $context["error_option_value"] : null), (isset($context["option_value_row"]) ? $context["option_value_row"] : null), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "</td>
                <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 204
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo $this->getAttribute($context["option_value"], "thumb", array());
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" /></a>
                  <input type=\"hidden\" name=\"option_value[";
            // line 205
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "][image]\" value=\"";
            echo $this->getAttribute($context["option_value"], "image", array());
            echo "\" id=\"input-image";
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "\" /></td>
                <td class=\"text-right\"><input type=\"text\" name=\"option_value[";
            // line 206
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "][sort_order]\" value=\"";
            echo $this->getAttribute($context["option_value"], "sort_order", array());
            echo "\" class=\"form-control\" /></td>
                <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#option-value-row";
            // line 207
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
              </tr>";
            // line 209
            $context["option_value_row"] = ((isset($context["option_value_row"]) ? $context["option_value_row"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "                </tbody>
              
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-right\"><button type=\"button\" onclick=\"addOptionValue();\" data-toggle=\"tooltip\" title=\"";
        // line 216
        echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'type\\']').on('change', function() {
\tif (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {
\t\t\$('#option-value').parent().show();
\t} else {
\t\t\$('#option-value').parent().hide();
\t}
});

\$('select[name=\\'type\\']').trigger('change');

var option_value_row =";
        // line 236
        echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
        echo ";

function addOptionValue() {
\thtml  = '<tr id=\"option-value-row' + option_value_row + '\">';
    html += '  <td class=\"text-left\"><input type=\"hidden\" name=\"option_value[' + option_value_row + '][option_value_id]\" value=\"\" />';";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 242
            echo "\thtml += '    <div class=\"input-group\">';
\thtml += '      <span class=\"input-group-addon\"><img src=\"language/";
            // line 243
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span><input type=\"text\" name=\"option_value[' + option_value_row + '][option_value_description][";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"\" placeholder=\"";
            echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
            echo "\" class=\"form-control\" />';
    html += '    </div>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "\thtml += '  </td>';
    html += '  <td class=\"text-center\"><a href=\"\" id=\"thumb-image' + option_value_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 247
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a><input type=\"hidden\" name=\"option_value[' + option_value_row + '][image]\" value=\"\" id=\"input-image' + option_value_row + '\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"option_value[' + option_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 248
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 249
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#option-value tbody').append(html);

\toption_value_row++;
}
//--></script></div>";
        // line 257
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/option_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 257,  524 => 249,  520 => 248,  514 => 247,  511 => 246,  495 => 243,  492 => 242,  488 => 241,  481 => 236,  458 => 216,  451 => 211,  445 => 209,  439 => 207,  433 => 206,  425 => 205,  417 => 204,  414 => 203,  405 => 201,  403 => 200,  393 => 198,  384 => 197,  380 => 196,  375 => 195,  370 => 194,  366 => 193,  364 => 192,  357 => 186,  353 => 185,  349 => 184,  342 => 180,  332 => 175,  327 => 173,  320 => 168,  316 => 164,  312 => 162,  308 => 158,  304 => 156,  302 => 155,  298 => 151,  294 => 149,  290 => 145,  286 => 143,  284 => 142,  280 => 138,  276 => 136,  272 => 132,  268 => 130,  266 => 129,  263 => 128,  260 => 127,  256 => 123,  252 => 121,  248 => 117,  244 => 115,  242 => 114,  239 => 113,  236 => 112,  232 => 108,  228 => 106,  224 => 102,  220 => 100,  218 => 99,  214 => 95,  210 => 93,  206 => 89,  202 => 87,  200 => 86,  197 => 85,  194 => 84,  190 => 80,  186 => 78,  182 => 74,  178 => 72,  176 => 71,  172 => 67,  168 => 65,  164 => 61,  160 => 59,  158 => 58,  154 => 54,  150 => 52,  146 => 48,  142 => 46,  140 => 45,  137 => 44,  131 => 41,  126 => 38,  117 => 36,  115 => 35,  107 => 33,  98 => 32,  94 => 31,  90 => 30,  85 => 28,  80 => 26,  74 => 23,  70 => 21,  63 => 17,  61 => 16,  56 => 13,  46 => 11,  42 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-option" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-option" class="form-horizontal">*/
/*           <fieldset>*/
/*             <legend>{{ text_option }}</legend>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label">{{ entry_name }}</label>*/
/*               <div class="col-sm-10"> {% for language in languages %}*/
/*                 <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                   <input type="text" name="option_description[{{ language.language_id }}][name]" value="{{ option_description[language.language_id] ? option_description[language.language_id].name }}" placeholder="{{ entry_name }}" class="form-control" />*/
/*                 </div>*/
/*                 {% if error_name[language.language_id] %}*/
/*                 <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                 {% endif %}*/
/*                 {% endfor %}</div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-type">{{ entry_type }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="type" id="input-type" class="form-control">*/
/*                   <optgroup label="{{ text_choose }}">*/
/*                 {% if type == 'select' %}*/
/*                 */
/*                 */
/*                   <option value="select" selected="selected">{{ text_select }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="select">{{ text_select }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 {% if type == 'radio' %}*/
/*                 */
/*                 */
/*                   <option value="radio" selected="selected">{{ text_radio }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="radio">{{ text_radio }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 {% if type == 'checkbox' %}*/
/*                 */
/*                 */
/*                   <option value="checkbox" selected="selected">{{ text_checkbox }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="checkbox">{{ text_checkbox }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 </optgroup>*/
/*                   <optgroup label="{{ text_input }}">*/
/*                 {% if type == 'text' %}*/
/*                 */
/*                 */
/*                   <option value="text" selected="selected">{{ text_text }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="text">{{ text_text }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 {% if type == 'textarea' %}*/
/*                 */
/*                 */
/*                   <option value="textarea" selected="selected">{{ text_textarea }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="textarea">{{ text_textarea }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 </optgroup>*/
/*                   <optgroup label="{{ text_file }}">*/
/*                 {% if type == 'file' %}*/
/*                 */
/*                 */
/*                   <option value="file" selected="selected">{{ text_file }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="file">{{ text_file }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 </optgroup>*/
/*                   <optgroup label="{{ text_date }}">*/
/*                 {% if type == 'date' %}*/
/*                 */
/*                 */
/*                   <option value="date" selected="selected">{{ text_date }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="date">{{ text_date }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 {% if type == 'time' %}*/
/*                 */
/*                 */
/*                   <option value="time" selected="selected">{{ text_time }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="time">{{ text_time }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 {% if type == 'datetime' %}*/
/*                 */
/*                 */
/*                   <option value="datetime" selected="selected">{{ text_datetime }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="datetime">{{ text_datetime }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 </optgroup>*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_value }}</legend>*/
/*             <table id="option-value" class="table table-striped table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td class="text-left required">{{ entry_option_value }}</td>*/
/*                   <td class="text-center">{{ entry_image }}</td>*/
/*                   <td class="text-right">{{ entry_sort_order }}</td>*/
/*                   <td></td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*               */
/*               {% set option_value_row = 0 %}*/
/*               {% for option_value in option_values %}*/
/*               <tr id="option-value-row{{ option_value_row }}">*/
/*                 <td class="text-center"><input type="hidden" name="option_value[{{ option_value_row }}][option_value_id]" value="{{ option_value.option_value_id }}" />*/
/*                   {% for language in languages %}*/
/*                   <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                     <input type="text" name="option_value[{{ option_value_row }}][option_value_description][{{ language.language_id }}][name]" value="{{ option_value.option_value_description[language.language_id] ? option_value.option_value_description[language.language_id].name }}" placeholder="{{ entry_option_value }}" class="form-control" />*/
/*                   </div>*/
/*                   {% if error_option_value[option_value_row][language.language_id] %}*/
/*                   <div class="text-danger">{{ error_option_value[option_value_row][language.language_id] }}</div>*/
/*                   {% endif %}*/
/*                   {% endfor %}</td>*/
/*                 <td class="text-left"><a href="" id="thumb-image{{ option_value_row }}" data-toggle="image" class="img-thumbnail"><img src="{{ option_value.thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="option_value[{{ option_value_row }}][image]" value="{{ option_value.image }}" id="input-image{{ option_value_row }}" /></td>*/
/*                 <td class="text-right"><input type="text" name="option_value[{{ option_value_row }}][sort_order]" value="{{ option_value.sort_order }}" class="form-control" /></td>*/
/*                 <td class="text-right"><button type="button" onclick="$('#option-value-row{{ option_value_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*               </tr>*/
/*               {% set option_value_row = option_value_row + 1 %}*/
/*               {% endfor %}*/
/*                 </tbody>*/
/*               */
/*               <tfoot>*/
/*                 <tr>*/
/*                   <td colspan="3"></td>*/
/*                   <td class="text-right"><button type="button" onclick="addOptionValue();" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                 </tr>*/
/*               </tfoot>*/
/*             </table>*/
/*           </fieldset>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'type\']').on('change', function() {*/
/* 	if (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {*/
/* 		$('#option-value').parent().show();*/
/* 	} else {*/
/* 		$('#option-value').parent().hide();*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'type\']').trigger('change');*/
/* */
/* var option_value_row = {{ option_value_row }};*/
/* */
/* function addOptionValue() {*/
/* 	html  = '<tr id="option-value-row' + option_value_row + '">';*/
/*     html += '  <td class="text-left"><input type="hidden" name="option_value[' + option_value_row + '][option_value_id]" value="" />';*/
/* 	{% for language in languages %}*/
/* 	html += '    <div class="input-group">';*/
/* 	html += '      <span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span><input type="text" name="option_value[' + option_value_row + '][option_value_description][{{ language.language_id }}][name]" value="" placeholder="{{ entry_option_value }}" class="form-control" />';*/
/*     html += '    </div>';*/
/* 	{% endfor %}*/
/* 	html += '  </td>';*/
/*     html += '  <td class="text-center"><a href="" id="thumb-image' + option_value_row + '" data-toggle="image" class="img-thumbnail"><img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a><input type="hidden" name="option_value[' + option_value_row + '][image]" value="" id="input-image' + option_value_row + '" /></td>';*/
/* 	html += '  <td class="text-right"><input type="text" name="option_value[' + option_value_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right"><button type="button" onclick="$(\'#option-value-row' + option_value_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#option-value tbody').append(html);*/
/* */
/* 	option_value_row++;*/
/* }*/
/* //--></script></div>*/
/* {{ footer }} */
