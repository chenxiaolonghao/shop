computed:{
          pages:function(){
                var pag = [];
                if( this.current_page < this.totalsshowItem ){ 
                 
                  var i = Math.min(this.totalsshowItem,this.totals);
                  while(i){
                      pag.unshift(i--);
                  }
                }else{ 
                    var middle = this.current_page - Math.floor(this.totalsshowItem / 2 ),
                        i = this.totalsshowItem;
                    if( middle >  (this.totals - this.totalsshowItem)  ){
                        middle = (this.totals - this.totalsshowItem) + 1
                    }
                    while(i--){
                        pag.push( middle++ );
                    }
                }
                return pag;
          }
},