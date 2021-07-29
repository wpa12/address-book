require('./bootstrap');


function filterAddresses(){

    // assign #filter to filter
    const filter = document.getElementById('filter');
    
    //add event listener for keyup event
    filter.addEventListener('keyup', function (e) {
        
        //get search value and convert it to lowercase
        const val = e.target.value.toLowerCase();
        
        // create an array of records
        const records = document.querySelectorAll('.record');
        
        //cycle array records
        records.forEach(function(record){
            //assign dataset.contactName attributes to attr
            const attr = record.dataset.contactName;
            
            // find index of the value and hide or show each result accordingly.
            if(attr.toLowerCase().indexOf(val) != -1){
                record.style.display = 'table-row';
            } else {
                record.style.display = 'none';
            }
        });
    });
}

filterAddresses();
