{"version":3,"sources":["text_field.js"],"names":["BX","namespace","isFunction","Landing","Utils","isBoolean","clone","bind","remove","escapeHtml","fireCustomEvent","UI","Field","Text","data","BaseField","apply","this","arguments","changeTagButton","onInputHandler","onInput","onValueChangeHandler","onValueChange","textOnly","content","input","innerHTML","onInputClick","onInputMousedown","onDocumentMouseup","onInputInput","onDocumentClick","onDocumentKeydown","onInputKeydown","document","prototype","constructor","__proto__","innerText","event","Event","BaseEvent","value","getValue","compatData","emit","keyCode","isEditable","currentField","Panel","EditorPanel","getInstance","hide","disableEdit","isTextOnly","preventDefault","enableTextOnly","util","trim","disableTextOnly","fromInput","setTimeout","stopPropagation","enableEdit","Tool","ColorPicker","hideAll","Button","FontAction","requestAnimationFrame","target","nodeName","range","createRange","selectNode","window","getSelection","removeAllRanges","addRange","onChangeHandler","onChangeTag","show","layout","contentEditable","tag","isContentEditable","reset","setValue","adjustTags","element","lastChild"],"mappings":"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","file":"text_field.map.js"}