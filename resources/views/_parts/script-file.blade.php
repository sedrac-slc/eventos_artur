<script>
    (()=>{
        const imgCheck = document.querySelector("#active-img");
        const inputFile = document.querySelector("#image");
        imgCheck.addEventListener('click',(e)=>{
            if(!imgCheck.checked){
                if(!inputFile.hasAttribute('disabled')) inputFile.setAttribute('disabled', true);
            }else{
                if(inputFile.hasAttribute('disabled')) inputFile.removeAttribute('disabled');
            }
        });
    })()
</script>
