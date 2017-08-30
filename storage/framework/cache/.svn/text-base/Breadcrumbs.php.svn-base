<?php
    Breadcrumbs::register("admin.index", function ($breadcrumbs) {
        $breadcrumbs->push("首页", route("admin.index"));
    });
Breadcrumbs::register("admin.user.manage", function ($breadcrumbs){
        $breadcrumbs->push("用户管理", route("admin.user.manage"));
    });Breadcrumbs::register("admin.permission.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("admin.user.manage");
                        $breadcrumbs->push("权限列表", route("admin.permission.index"));
                    });
                    Breadcrumbs::register("admin.user.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("admin.user.manage");
                        $breadcrumbs->push("用户列表", route("admin.user.index"));
                    });
                    Breadcrumbs::register("admin.role.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("admin.user.manage");
                        $breadcrumbs->push("角色列表", route("admin.role.index"));
                    });
                    Breadcrumbs::register("admin.permission.create", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.permission.index");
                          $breadcrumbs->push("添加权限", route("admin.permission.create"));
                        });
                  Breadcrumbs::register("admin.permission.edit", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.permission.index");
                          $breadcrumbs->push("修改权限", route("admin.permission.edit"));
                        });
                  Breadcrumbs::register("admin.permission.destroy ", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.permission.index");
                          $breadcrumbs->push("删除权限", route("admin.permission.destroy "));
                        });
                  Breadcrumbs::register("admin.user.create", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.user.index");
                          $breadcrumbs->push("添加用户", route("admin.user.create"));
                        });
                  Breadcrumbs::register("admin.user.edit", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.user.index");
                          $breadcrumbs->push("编辑用户", route("admin.user.edit"));
                        });
                  Breadcrumbs::register("admin.user.destroy", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.user.index");
                          $breadcrumbs->push("删除用户", route("admin.user.destroy"));
                        });
                  Breadcrumbs::register("admin.role.create", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.role.index");
                          $breadcrumbs->push("添加角色", route("admin.role.create"));
                        });
                  Breadcrumbs::register("admin.role.edit", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.role.index");
                          $breadcrumbs->push("编辑角色", route("admin.role.edit"));
                        });
                  Breadcrumbs::register("admin.role.destroy", function ($breadcrumbs) {
                  $breadcrumbs->parent("admin.role.index");
                          $breadcrumbs->push("删除角色", route("admin.role.destroy"));
                        });
                  Breadcrumbs::register("member.permission", function ($breadcrumbs){
        $breadcrumbs->push("会员管理", route("member.permission"));
    });Breadcrumbs::register("member.index.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("member.permission");
                        $breadcrumbs->push("会员列表", route("member.index.index"));
                    });
                    Breadcrumbs::register("good.permission", function ($breadcrumbs){
        $breadcrumbs->push("商品管理", route("good.permission"));
    });Breadcrumbs::register("good.index.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("good.permission");
                        $breadcrumbs->push("礼品", route("good.index.index"));
                    });
                    Breadcrumbs::register("good.ticket.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("good.permission");
                        $breadcrumbs->push("积分券", route("good.ticket.index"));
                    });
                    Breadcrumbs::register("good.cashcoupon.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("good.permission");
                        $breadcrumbs->push("代金券", route("good.cashcoupon.index"));
                    });
                    Breadcrumbs::register("good.coupon.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("good.permission");
                        $breadcrumbs->push("优惠券", route("good.coupon.index"));
                    });
                    Breadcrumbs::register("good.cashcoupon.create", function ($breadcrumbs) {
                  $breadcrumbs->parent("good.cashcoupon.index");
                          $breadcrumbs->push("新增代金券", route("good.cashcoupon.create"));
                        });
                  Breadcrumbs::register("good.index.create", function ($breadcrumbs) {
                  $breadcrumbs->parent("good.index.index");
                          $breadcrumbs->push("添加商品", route("good.index.create"));
                        });
                  Breadcrumbs::register("good.index.edit", function ($breadcrumbs) {
                  $breadcrumbs->parent("good.index.index");
                          $breadcrumbs->push("商品修改", route("good.index.edit"));
                        });
                  Breadcrumbs::register("good.ticket.create", function ($breadcrumbs) {
                  $breadcrumbs->parent("good.ticket.index");
                          $breadcrumbs->push("新增积分券", route("good.ticket.create"));
                        });
                  Breadcrumbs::register("good.ticket.delete", function ($breadcrumbs) {
                  $breadcrumbs->parent("good.ticket.index");
                          $breadcrumbs->push("删除积分券", route("good.ticket.delete"));
                        });
                  Breadcrumbs::register("good.coupon.create", function ($breadcrumbs) {
                  $breadcrumbs->parent("good.coupon.index");
                          $breadcrumbs->push("新增优惠券", route("good.coupon.create"));
                        });
                  Breadcrumbs::register("good.coupon.delete", function ($breadcrumbs) {
                  $breadcrumbs->parent("good.coupon.index");
                          $breadcrumbs->push("删除优惠券", route("good.coupon.delete"));
                        });
                  Breadcrumbs::register("good.coupon.update", function ($breadcrumbs) {
                  $breadcrumbs->parent("good.coupon.index");
                          $breadcrumbs->push("更新优惠券", route("good.coupon.update"));
                        });
                  Breadcrumbs::register("good.index.api_list", function ($breadcrumbs) {
                  $breadcrumbs->parent("good.index.index");
                          $breadcrumbs->push("商品列表", route("good.index.api_list"));
                        });
                  Breadcrumbs::register("system.permission", function ($breadcrumbs){
        $breadcrumbs->push("常规设置", route("system.permission"));
    });Breadcrumbs::register("system.index.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("system.permission");
                        $breadcrumbs->push("公众号设置", route("system.index.index"));
                    });
                    Breadcrumbs::register("system.index.create", function ($breadcrumbs) {
                  $breadcrumbs->parent("system.index.index");
                          $breadcrumbs->push("添加设置", route("system.index.create"));
                        });
                  Breadcrumbs::register("system.index.edit", function ($breadcrumbs) {
                  $breadcrumbs->parent("system.index.index");
                          $breadcrumbs->push("修改设置", route("system.index.edit"));
                        });
                  Breadcrumbs::register("project.permission", function ($breadcrumbs){
        $breadcrumbs->push("项目管理", route("project.permission"));
    });Breadcrumbs::register("project.index.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("project.permission");
                        $breadcrumbs->push("项目", route("project.index.index"));
                    });
                    Breadcrumbs::register("project.index.create", function ($breadcrumbs) {
                  $breadcrumbs->parent("project.index.index");
                          $breadcrumbs->push("新增项目", route("project.index.create"));
                        });
                  Breadcrumbs::register("project.index.edit", function ($breadcrumbs) {
                  $breadcrumbs->parent("project.index.index");
                          $breadcrumbs->push("更新项目", route("project.index.edit"));
                        });
                  Breadcrumbs::register("project.index.update", function ($breadcrumbs) {
                  $breadcrumbs->parent("project.index.index");
                          $breadcrumbs->push("项目更新", route("project.index.update"));
                        });
                  Breadcrumbs::register("plastic.permission", function ($breadcrumbs){
        $breadcrumbs->push("整形百科", route("plastic.permission"));
    });Breadcrumbs::register("plastic.index.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("plastic.permission");
                        $breadcrumbs->push("整形百科", route("plastic.index.index"));
                    });
                    Breadcrumbs::register("plastic.index.create", function ($breadcrumbs) {
                  $breadcrumbs->parent("plastic.index.index");
                          $breadcrumbs->push("增加内容", route("plastic.index.create"));
                        });
                  Breadcrumbs::register("plastic.index.edit", function ($breadcrumbs) {
                  $breadcrumbs->parent("plastic.index.index");
                          $breadcrumbs->push("编辑内容", route("plastic.index.edit"));
                        });
                  Breadcrumbs::register("plastic.index.update", function ($breadcrumbs) {
                  $breadcrumbs->parent("plastic.index.index");
                          $breadcrumbs->push("更新内容", route("plastic.index.update"));
                        });
                  Breadcrumbs::register("appointment.permission", function ($breadcrumbs){
        $breadcrumbs->push("预约医生", route("appointment.permission"));
    });Breadcrumbs::register("appointment.index.index", function ($breadcrumbs) {
                        $breadcrumbs->parent("appointment.permission");
                        $breadcrumbs->push("预约医生", route("appointment.index.index"));
                    });
                    Breadcrumbs::register("appointment.index.edit", function ($breadcrumbs) {
                  $breadcrumbs->parent("appointment.index.index");
                          $breadcrumbs->push("编辑预约", route("appointment.index.edit"));
                        });
                  Breadcrumbs::register("appointment.index.update", function ($breadcrumbs) {
                  $breadcrumbs->parent("appointment.index.index");
                          $breadcrumbs->push("更新预约", route("appointment.index.update"));
                        });
                  Breadcrumbs::register("appointment.index.delete", function ($breadcrumbs) {
                  $breadcrumbs->parent("appointment.index.index");
                          $breadcrumbs->push("删除预约", route("appointment.index.delete"));
                        });
                  