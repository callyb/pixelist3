
export const myStructure = (S) =>
    S.list()
        .title('Your Website: editable sections - click each section to see what you can edit')
        .items([

            S.divider(),
            S.listItem()
                .title('Home ')
                .id('home')
                .child(
                    S.document()
                        .schemaType('home')
                        .documentId('home')
                        .title('Home Page')
                ),
            S.divider(),
            S.listItem()
                .title('About ')
                .id('about')
                .child(
                    S.document()
                        .schemaType('about')
                        .documentId('about')
                        .title('About Page')
                ),
            S.divider(),
            S.listItem()
                .title('Blog Posts Page ')
                .id('blog')
                .child(
                    S.document()
                        .schemaType('blog')
                        .documentId('blog')
                        .title('Blog Posts Page')
                ),
            S.documentTypeListItem("post").title("Single Posts"),

            S.divider(),

            S.listItem()
                .title('Projects Page ')
                .id('projects')
                .child(
                    S.document()
                        .schemaType('projects')
                        .documentId('projects')
                        .title('Projects Page')
                ),
            S.documentTypeListItem("project").title("Single Projects"),

            S.divider(),

            S.documentTypeListItem("author").title("Authors"),

        ]);