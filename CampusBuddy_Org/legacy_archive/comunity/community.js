
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.featured-nav button');
    const content = document.getElementById('featuredContent');

    const contentData = {
        trending: [
            { icon: '📚', title: 'Study Groups', desc: 'Join active study sessions', stats: ['👥 234', '📈 12'] },
            { icon: '🎯', title: 'Upcoming Events', desc: 'Don\'t miss campus activities', stats: ['📅 8', '🔥 45'] },
            { icon: '💡', title: 'Resource Hub', desc: 'Shared notes & materials', stats: ['📄 567', '⭐ 89'] },
            { icon: '🤝', title: 'Collaboration', desc: 'Find project partners', stats: ['🔗 45', '💬 23'] }
        ],
        popular: [
            { icon: '🔥', title: 'Hot Discussions', desc: 'Most talked about topics', stats: ['💬 156', '👍 892'] },
            { icon: '📖', title: 'Study Materials', desc: 'Popular resources this week', stats: ['📥 445', '⭐ 234'] },
            { icon: '🎮', title: 'Gaming Club', desc: 'Join the gaming community', stats: ['🎮 89', '🏆 12'] },
            { icon: '🎨', title: 'Art & Design', desc: 'Creative projects showcase', stats: ['🎨 67', '❤️ 123'] }
        ],
        new: [
            { icon: '✨', title: 'New Study Groups', desc: 'Fresh study sessions started', stats: ['🆕 8', '👥 45'] },
            { icon: '📝', title: 'Recent Posts', desc: 'Latest community updates', stats: ['📅 12', '💬 34'] },
            { icon: '🎪', title: 'Campus Events', desc: 'New activities announced', stats: ['🎉 5', '📅 78'] },
            { icon: '💻', title: 'Tech Workshops', desc: 'Upcoming coding sessions', stats: ['💻 3', '🔧 23'] }
        ]
    };

    function updateContent(tabName) {
        const items = contentData[tabName];
        content.innerHTML = items.map(item => `
            <div class="featured-item">
                <div class="featured-icon">${item.icon}</div>
                <h4>${item.title}</h4>
                <p>${item.desc}</p>
                <div class="featured-stats">
                    <span>${item.stats[0]}</span>
                    <span>${item.stats[1]}</span>
                </div>
            </div>
        `).join('');
    }

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            updateContent(this.textContent.toLowerCase());
        });
    });
});
