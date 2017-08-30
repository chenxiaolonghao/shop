/*处理列表数据*/
do_list_action:function(response)
{
    this.datalist=[];
    /*响应成功*/
    var statusinfo=response.data;
    
    if(statusinfo.status==1)
    {
        /*
          |---------------------------------------------
          | 查询条件数据赋值
          |---------------------------------------------
          |
          */
        if(statusinfo.keyword)
        {
          this.pageparams.way=statusinfo.way;
          this.pageparams.keyword=statusinfo.keyword;
        }
        /*
          |---------------------------------------------
          | 分页参数赋值
          |---------------------------------------------
          |
          */
        this.current_page=statusinfo.resource.current_page;/*当前页数据*/
        this.totals_title=statusinfo.resource.total+ ' 条数据';/*总记页数标题*/
        this.totals=Math.ceil(statusinfo.resource.total/statusinfo.resource.per_page);/*总记录页数*/
        this.last_page=statusinfo.resource.last_page;/*尾页数据*/
        /*下一页数据*/
        if(this.current_page==this.totals)
        {
          this.next_page=this.totals;
        }
        else
        {
          this.next_page=this.current_page+1;
        }
        /*上一页数据*/
        if(this.current_page==1)
        {
          this.prev_page=1;
        }
        else
        {
          this.prev_page=this.current_page-1;
        }
        /*
          |---------------------------------------------
          | 渲染列表数据
          |---------------------------------------------
          |
          */
        this.datalist=statusinfo.resource.data;
    }
    else
    {
        layer.msg(statusinfo.info);
    }
},