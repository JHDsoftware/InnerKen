
# REDSTONE 软件需求简要说明书

## 简述


  ![image](https://github.com/juhaodong/InnerKen/blob/master/resources/innerKenLogo.png)
 

Project RED STONE， 通称需求留言板，正式名InnerKen，是JHD software计划开发的用于需求及项目管理的开源项目，现正处于筹备阶段。计划完成为以项目为核心对象的，拥有现代化（material design）设计界面和 直观，用户友好的人机交互 以网页为基础的软件。

后端主要使用php+mysql，采用数据库——驱动层——应用层——传输层，4层结构的构架，独立完成其中各个部分作为技术验证。

前端的处理使用angular.js库，界面使用以bootstrap 为核心的多种库。

前期目标为完成软件本身。

中期目标为在实际应用中不断完善本软件，并收集数据。

远期目标则是通过收集的数据通过机器学习完成项目成本的自动化生成。

## 背景

项目管理，是指对于基于对于项目现状的深度了解，控制项目所花费的资源，时间，和人力，使项目可以按照预期的成本，时间完成。

其中重要的几个环节是对于预算的合理估计，对于项目情况的清晰掌控，对于各种资源的合理分配及使用。

而如今的市场上免费开源项目管理软件本身是极度稀缺的，且其中大部分都是所谓的团队协作软件。这些团队协作软件的免费版大多存在重要功能稀缺，用户界面不友好，使用不直观，不人性化，更新懒惰的问题。团队协作软件往往以人而不是项目本身为导向，这种取向导致了目前的软件无法用于汇报，成果本身无法汇总，流程管理混乱。

我们所开发的软件首先将解决对于项目进程的清晰了解的问题。

而这种进程则是以需求为核心的。我们在软件的初期想要完成的问题便是如何以需求为导向完成项目的管理。而过去一个月的工作经验表明，我们可以以列表的方式进行管理。

## 功能设想

在介绍具体的功能前，我希望做几个简单的定义。

**项目** ：项目是有限个需求的集合，当项目所属的需求在预期的成本下全部完成或现阶段完成后，视为完成。

**设想** ：需求的初级阶段，是可能不熟悉实际工作领域的管理者提出的需求，再经过和工作者的讨论，修改，在经过管理者的承认后成为 **需求** 。

**需求:** 是一种管理者对希望工作者完成的工作的描述。

需求有以下几种状态： **制作，审核，完成。**

管理者提出的设想在和工作者讨论形成需求后，后进入 **制作** 阶段，制作阶段的需求被工作者完成后提交给管理者 **审核** ，管理者可以要求工作者继续修改或者认可本需求为 **完成** 。完成的需求理论上不可以继续修改，但是基于实际情况，可以认为大多数需求永远都不会处于完成状态。而所谓的完成状态则是对于需求的一种搁置，即 **现阶段完成** 。

**管理者：** 需求的提出者，也是需求的验收者。拥有提出设想，验收需求的的权力。

**工作者** ：需求的执行者，也是设想的验收者，拥有决定是否执行设想的权力。

在进行了这些定义后，我们便可以更为清晰的描述应用的功能和行为。

本应用的初级版本将以列表的方式呈现设想，需求，制作中的需求，完成的需求。

以列表的方式进行管理是符合用户习惯的。现在的大多数管理都习惯于将需求写成由很多以回车分隔的句子的形式。而在绝大多数情况下，这种句子的每一个都包含了一个完整的需求。

如此我们需要提供一个可以让用户（管理者）输入的空间，在这个空间里，管理者可以畅所欲言，提出所有他希望的设想，而这个空间将会处理管理者所输入的文字，将其生成为供工作者使用的设想，在设想得到工作者认可后，被工作者提交到制作中的需求中去。而制作中的需求同样是以列表的方式展现的，这样子工作者就可以更加省心的完成项目的制作，只需要简单的按照自己认可的需求工作即可。

在工作者工作结束之后，工作者将确认需求完成，管理者以邮件的形式将收到和项目最新进展相关的情况，在管理者确认需求完成后，需求被移动到已完成列表中，如此需求便被视为现阶段完成，暂时被搁置。

在所有的需求均被完成后，项目被认为是现阶段完成，所有相关的操作记录都会被保存为一个文档，以备之后调用。

## 详细需求

很明显，本程序需要两种用户界面，一种是给管理者使用的，另外一种则是给工作者使用的，考虑到实际情况，我们将优先开发给管理者使用的界面。具体的界面设计参照 [Material Design](https://material.io/design/)。

## 管理者页面架构

### 入口页

入口页是整个网站的入口，主要用来展示项目（redstone）本身的进展情况，和本软件和本团队的介绍。需要提供关于数据保护AGB，用户使用协议，登录/注册页等的链接。

### 登录/注册页

登录/注册负责处理用户登录注册的信息，在和数据库比对后返回相应的成功提示，失败提示，在登录/注册成功后跳转到功能页。在返回时跳转到入口页。

### 功能页

功能页是网站主要功能的载体，将会以tab形式（参考IOS设置界面）进行展示。tab将在网页的左侧，使用bootstrap技术完成自适应式布局，引用成熟模板完成设计。tab中应该至少包含以下选项：1.总览。2.设置。3.项目进展详细信息（制作中的需求和预期的完成时间）。4.提交新需求。5.待确认的需求。6.已完成的需求。7.项目时间线

#### 1.总览：

总览一个信息展示的入口，关于各个项目的最新动态，即将到期的制作中的需求，提交新需求的快速入口，待确认需求的条数，最近一段时间内完成需求的条形图或折线图等。

#### 2.设置：

设置目前仅放置如下几个功能。修改密码，删除和添加项目，隐藏和展示项目，修改提示邮箱，修改发送邮件设置，向本软件开发者团队提交bug，提交bug点击后进入反馈页。

#### 3.项目进展详细信息（制作中的需求和预期的完成时间）

将以列表的形式将项目的进展情况列出。

#### 4.提交新需求：

输入区域，将提供一些基础的输入工具，在提交后，将包含本次输入文本，项目id以及需求发送者信息的数据保存到服务器上，并向contact@jhdsoftware.com发送邮件。需求文本被以回车分割后提交为多个需求。每个需求都将被独立的保存到相应的数据库中，并生成一个唯一的需求id。

#### 5.待确认的需求：

tab上将以badge的形式显示待确认的需求条数。列表展示待确认的需求。表中至少应该包含需求的内容，需求所属的项目，提交审核的工作者，提交的日期。

管理者在确认需求后发送需求id以及确认信息到服务器，服务器接受后反馈需求已被完成，需求的完成状态改为已完成。而在管理者拒绝接受需求时，需求将会被返回至制作中的需求，管理者在拒绝需求时需要在对话框中提供一个理由。这个理由会被视为对于需求的补充，被添加到需求中。

#### 6.已完成的需求：

列表展示已完成的需求，完成预期的时间，实际完成的时间，花费的成本。

#### 7.项目时间线：

根据4,5,6三者的操作记录，生成一个时间线。时间线上排布重要的事件。事件中应该至少包括 人，需求，时间。例如5月11日，我提交了一个软件设计书。

### 反馈页

反馈页是客户对于我们的软件本身提供反馈的空间。客户可在此提交反馈，反馈会发送到contact@jhdsoftware.com。

## 后端需求

### 数据库设计

参见附加文档-Project RED STONE 数据库设计.docx

### 驱动层设计

参加附加文档-menuDataByRabbit.php

### 应用层设计

应用层负责处理后端中具体数据录入的接口。应用层调用驱动层访问数据库，并完成增改删查等操作。应用层的具体需求请查阅附加文档-Project RED STONE接口列表.html

应用层的文档模板.doc

 ![image](https://github.com/juhaodong/InnerKen/blob/master/resources/apiDemandsExplaination.png)
需求说明的模板

### 传输层设计

传输层负责处理传输的数据，对数据本身的有效性做校验。可以被归类在应用层中。
  ![image](https://github.com/juhaodong/InnerKen/blob/master/resources/jhdLogo.png)
