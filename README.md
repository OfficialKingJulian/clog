# Clog: Command Line blOG

Mini-project to create quick blog with PHP and Bash. It's effectively a static site generator but one which uses PHP to `include` the header and footer and some other important parts. This is mainly a tool for my personal convenience. 


## Benefits

- Straight-foward to use
- No database required 
- Edit with VIM and Markdown (and HTML)
- Basic CSS layout included
- SEO friendly
- Designed to be fast loading


## Usage

Keep the script in the site root directory to make
things simple. 

`./sb add` takes you through the process of writing a post

`./sb post` allows you to select which draft post you want to post

`./sb remove` or `./sb rm` allows you to remove a post


## Todo

- [x] Multiple instances (commands are designed to work from the root of the site you want to control)
- [ ] Need to be able to write images and links in the
  markdown format
- [ ] Also need to be able to do recognise bold and
  italic text at some point too
- [ ] Assign dates to posts, rather than the current; sorting by most recently edited (bad method!!!)
