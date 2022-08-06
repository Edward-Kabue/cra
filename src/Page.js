import React from 'react';
import PostContent from './components/PostContent';
const Page = ({ page }) => {
  if (page) {
    switch (page?.meta?.type) {
      case 'bloglist':
        return <div>Blog List</div>;
      case 'blogpost':
        return <div>Blog Post</div>;
      case 'page':
        return <PostContent content={page.content || []} />;
      default:
        console.error('Unknown content type.');
    }
  }
  return <></>;
};

export default Page;
